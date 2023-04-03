<?php

namespace Drupal\event_type_same\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Url;
use Drupal\node\Entity\Node;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a dernier evenement de même type block.
 *
 * @Block(
 *   id = "event_type_same_last",
 *   admin_label = @Translation("Dernier evenement de même type"),
 *   category = @Translation("Custom")
 * )
 */
class LastEventBlock extends BlockBase implements ContainerFactoryPluginInterface {
  /** @var \Drupal\Core\Routing\RouteMatchInterface  */
  protected RouteMatchInterface $routeMatch;

  /** @var \Drupal\Core\Entity\EntityTypeManagerInterface  */
  protected EntityTypeManagerInterface $manager;

  /**
   * Constructs a new LastBlock instance.
   *
   * @param array $configuration
   *   The plugin configuration, i.e. an array with configuration values keyed
   *   by configuration option name. The special key 'context' may be used to
   *   initialize the defined contexts by setting it to an array of context
   *   values keyed by context names.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, RouteMatchInterface $route_match, EntityTypeManagerInterface $manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->routeMatch = $route_match;
    $this->manager = $manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_route_match'),
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $node = $this->routeMatch->getParameter('node');
    if ($node instanceof \Drupal\node\NodeInterface) {
      $nid = $node->id();
    }
    $field_event_type_id = $this->getEventInfo($nid)->get('field_event_type')->getValue()[0]['target_id'];
    $last_events= $this->getLastEvent($field_event_type_id);
    $items = [];
    foreach ($last_events as $event) {
      $link = [
        '#type' => 'link',
        '#url' => Url::fromRoute('entity.node.canonical', ['node' => $event->id()]),
        '#title' => $this->t($event->label()),
      ];
      $items[] = [
        'titre' => $link
      ];
    }

    return [
      '#theme' => 'event_type_same_block',
      '#items' => $items,
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  private function getEventInfo(int|string|null $nid) {
    $nids = $this->manager
      ->getStorage('node')
      ->getQuery()
      ->condition('type', 'event')
      ->condition('nid', $nid, '=')
      ->execute();
   return  Node::load(reset($nids));
  }

  private function getLastEvent(mixed $field_event_type_id) {
    $today = date("Y-m-d h:i:s", strtotime("now"));
    $nids = $this->manager
      ->getStorage('node')
      ->getQuery()
      ->condition('type', 'event')
      ->condition('field_event_type', $field_event_type_id, '=')
      ->sort('field_date_start', 'ASC')
      ->condition('field_date_end', $today,'>')
      ->range(0, 3)
      ->execute();
    return  Node::loadMultiple($nids);
  }
}
