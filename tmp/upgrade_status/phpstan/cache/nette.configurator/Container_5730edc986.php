<?php
// source: phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: /var/www/html/web/../tmp/upgrade_status/deprecation_testing.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_5730edc986 extends _PHPStan_723dfc51e\Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.methodsClassReflectionExtension' => ['066' => true, '070' => true, '0259' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'067' => true,
			'071' => true,
			'0170' => true,
			'0258' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0119' => true,
			'0120' => true,
			'0121' => true,
			'0122' => true,
			'0123' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0142' => true,
			'0146' => true,
			'0147' => true,
			'0149' => true,
			'0150' => true,
			'0152' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0163' => true,
			'0172' => true,
			'0175' => true,
			'0176' => true,
			'0177' => true,
			'0178' => true,
			'0180' => true,
			'0181' => true,
			'0182' => true,
			'0183' => true,
			'0184' => true,
			'0185' => true,
			'0186' => true,
			'0187' => true,
			'0188' => true,
			'0189' => true,
			'0190' => true,
			'0191' => true,
			'0192' => true,
			'0193' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0198' => true,
			'0199' => true,
			'0200' => true,
			'0201' => true,
			'0219' => true,
			'0225' => true,
			'0226' => true,
			'0229' => true,
			'0230' => true,
			'0231' => true,
			'0232' => true,
			'0233' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0124' => true,
			'0148' => true,
			'0173' => true,
			'0174' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0220' => true,
			'0221' => true,
			'0222' => true,
			'0223' => true,
			'0224' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0143' => true,
			'0145' => true,
			'0234' => true,
			'0256' => true,
			'0257' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0144' => true,
			'0154' => true,
			'0172' => true,
			'0194' => true,
			'0227' => true,
			'0228' => true,
			'0234' => true,
			'0235' => true,
			'0236' => true,
			'0237' => true,
			'0238' => true,
			'0239' => true,
			'0248' => true,
			'0249' => true,
			'0250' => true,
			'0251' => true,
			'0252' => true,
			'0253' => true,
			'0254' => true,
			'0255' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0151' => true,
			'0153' => true,
			'0166' => true,
			'0167' => true,
			'0168' => true,
			'0169' => true,
			'0171' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0164' => true, '0165' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0179' => true],
		'phpstan.rules.rule' => [
			'0260' => true,
			'0261' => true,
			'0262' => true,
			'0263' => true,
			'0264' => true,
			'0265' => true,
			'0266' => true,
			'0267' => true,
			'0268' => true,
			'0269' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.3' => true,
			'rules.4' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_723dfc51e\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_723dfc51e\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'086',
				'087',
				'089',
				'090',
				'0103',
				'0260',
				'0261',
				'0262',
				'0263',
				'0264',
				'0265',
				'0266',
				'0267',
				'0268',
				'0269',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['rules.1']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule' => [['rules.2']],
		'mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule' => [['rules.3']],
		'mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\AbstractPluginManagerRule' => [1 => ['rules.4']],
		'mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule' => [['rules.4']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\AccessDeprecatedConstant' => [['rules.5']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [['rules.6']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [['rules.7']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [['rules.8']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [['rules.9']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [['rules.10']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [['rules.11']],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [['rules.12']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [['rules.13']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [['rules.14']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [['rules.15']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [['rules.16']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule' => [['rules.17']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule' => [['rules.18']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule' => [['rules.19']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule' => [['rules.20']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [['rules.21']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [['03', '04', '037', '049', '057']],
		'PhpParser\NodeVisitor' => [['03', '04', '037', '049', '057']],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['04']],
		'PhpParser\PrettyPrinterAbstract' => [['05']],
		'PhpParser\PrettyPrinter\Standard' => [['05']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['06']],
		'PHPStan\Php\PhpVersion' => [['07']],
		'PHPStan\Php\PhpVersionFactory' => [['08']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['09']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['010']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['011']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['012']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['013']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['014']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['015']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['016']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['017']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['018']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['019']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['020']],
		'PHPStan\PhpDoc\StubValidator' => [['021']],
		'PHPStan\Analyser\Analyser' => [['022']],
		'PHPStan\Analyser\FileAnalyser' => [['023']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['024']],
		'PHPStan\Analyser\ScopeFactory' => [['025']],
		'PHPStan\Analyser\LazyScopeFactory' => [['025']],
		'PHPStan\Analyser\NodeScopeResolver' => [['026']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['027']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['028']],
		'PHPStan\Cache\Cache' => [['029']],
		'PHPStan\Command\AnalyseApplication' => [['030']],
		'PHPStan\Command\AnalyserRunner' => [['031']],
		'PHPStan\Command\FixerApplication' => [['032']],
		'PHPStan\Command\IgnoredRegexValidator' => [['033']],
		'PHPStan\Dependency\DependencyResolver' => [['034']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['035']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['036']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['037']],
		'PHPStan\DependencyInjection\Container' => [['038'], ['039']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['039']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['040']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['041']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['042']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['043']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['044']],
		'PHPStan\File\FileHelper' => [['045']],
		'PHPStan\File\FileExcluderFactory' => [['046']],
		'PHPStan\File\FileExcluderRawFactory' => [['047']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['048']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['049']],
		'PHPStan\Parallel\ParallelAnalyser' => [['050']],
		'PHPStan\Parallel\Scheduler' => [['051']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['052']],
		'PHPStan\Process\CpuCoreCounter' => [['053']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['054']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['055', '066', '068', '070', '0259']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['055']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['056', '067', '068', '071', '0170', '0258']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['056']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['057']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['058']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['059'],
			2 => [1 => 'betterReflectionSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['059']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['060']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['061']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['062']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['063']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['064']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['065']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['066']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['067']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['068']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['069']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['070']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['071']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['072']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['073']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['074']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['078'], ['075', '076']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['075']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['076']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['077']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['079']],
		'PHPStan\Rules\AttributesCheck' => [['080']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['081']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['082']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['083']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['084']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['085'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['085']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['086']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['087']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['088']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['089']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['090']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['091']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['092']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['093']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['094']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['095']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['096']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['097']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['098']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['099']],
		'PHPStan\Rules\IssetCheck' => [['0100']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0101']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0102']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0103']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0104']],
		'PHPStan\Rules\NullsafeCheck' => [['0105']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0106']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0106']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0107']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0108']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0108']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0109']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0110']],
		'PHPStan\Rules\RegistryFactory' => [['0111']],
		'PHPStan\Rules\RuleLevelHelper' => [['0112']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0113']],
		'PHPStan\Type\FileTypeMapper' => [['0114']],
		'PHPStan\Type\TypeAliasResolver' => [['0115']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0116',
				'0117',
				'0118',
				'0119',
				'0120',
				'0121',
				'0122',
				'0123',
				'0125',
				'0126',
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0142',
				'0146',
				'0147',
				'0149',
				'0150',
				'0152',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0163',
				'0172',
				'0175',
				'0176',
				'0177',
				'0178',
				'0180',
				'0181',
				'0182',
				'0183',
				'0184',
				'0185',
				'0186',
				'0187',
				'0188',
				'0189',
				'0190',
				'0191',
				'0192',
				'0193',
				'0195',
				'0196',
				'0197',
				'0198',
				'0199',
				'0200',
				'0201',
				'0219',
				'0225',
				'0226',
				'0229',
				'0230',
				'0231',
				'0232',
				'0233',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0117']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0118']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0119']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0121']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0122']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0123']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0124',
				'0148',
				'0173',
				'0174',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0220',
				'0221',
				'0222',
				'0223',
				'0224',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0124',
				'0148',
				'0173',
				'0174',
				'0179',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0220',
				'0221',
				'0222',
				'0223',
				'0224',
				'0226',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0124']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0128']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0135']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0137']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0138']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0139']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0141']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0142']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0143', '0145', '0234', '0256', '0257']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0143']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'0144',
				'0154',
				'0172',
				'0194',
				'0227',
				'0228',
				'0234',
				'0235',
				'0236',
				'0237',
				'0238',
				'0239',
				'0248',
				'0249',
				'0250',
				'0251',
				'0252',
				'0253',
				'0254',
				'0255',
			],
		],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0144']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0146']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0147']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0148']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0149']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0150']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [['0151', '0153', '0166', '0167', '0168', '0169', '0171']],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0151']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0153']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0155']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0156']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0163']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0164', '0165']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0164']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0165']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0166']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0167']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0168']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0169']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0170']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0171']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0173']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0174']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0175']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0176']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0178']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0179']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0179']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0180']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0181']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0182']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0184']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0185']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0186']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0187']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0192']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0196']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0197']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0198']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0200']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0202']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0203']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0204']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0205']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0206']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0207']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0208']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0209']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0210']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0211']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0212']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0213']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0214']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0215']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0216']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0217']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0218']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0219']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0220']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0221']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0222']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0223']],
		'PHPStan\Type\Php\ArrayIsListFunctionTypeSpecifyingExtension' => [['0224']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0225']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0231']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0232']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0233']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0234']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0235', '0236', '0237', '0238', '0239']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 'runtimeReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'currentPhpVersionRichParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionSimpleDirectParser',
				'defaultAnalysisParser',
				'php8Parser',
				'pathRoutingParser',
			],
		],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleDirectParser', 'php8Parser']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser']],
		'PhpParser\Parser' => [2 => ['phpParserDecorator', 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['originalBetterReflectionReflector'],
			2 => [
				1 => 'betterReflectionReflector',
				'betterReflectionClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'nodeScopeResolverReflector',
			],
		],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [['originalBetterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			2 => ['betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [2 => ['betterReflectionClassReflector']],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'Hoa\Compiler\Llk\Parser' => [['regexParser']],
		'Hoa\File\File' => [['regexGrammarStream']],
		'Hoa\File\Generic' => [['regexGrammarStream']],
		'Hoa\Stream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Stream' => [['regexGrammarStream']],
		'Hoa\Event\Listenable' => [['regexGrammarStream']],
		'Hoa\Event\Source' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pathable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Statable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Touchable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Bufferable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Lockable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pointable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\In' => [['regexGrammarStream']],
		'Hoa\File\Read' => [['regexGrammarStream']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0240']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0241']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0242']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0243', '0244']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0243']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0244']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'mglaman\PHPStanDrupal\Drupal\ServiceMap' => [['0245']],
		'mglaman\PHPStanDrupal\Drupal\ExtensionMap' => [['0246']],
		'mglaman\PHPStanDrupal\Drupal\EntityDataRepository' => [['0247']],
		'mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension' => [['0248']],
		'mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension' => [['0249']],
		'mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension' => [['0250']],
		'mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension' => [['0251']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension' => [['0252']],
		'mglaman\PHPStanDrupal\Type\UrlToStringDynamicReturnTypeExtension' => [['0253']],
		'mglaman\PHPStanDrupal\Type\AccessibleReturnTypeExtension' => [['0254']],
		'mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension' => [['0255']],
		'mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension' => [['0256']],
		'mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension' => [['0257']],
		'mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension' => [['0258']],
		'mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension' => [['0259']],
		'mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule' => [['0260']],
		'mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule' => [['0261']],
		'mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludeBase' => [['0262', '0263']],
		'mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes' => [['0262']],
		'mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude' => [['0263']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\DeprecatedAnnotationsRuleBase' => [['0264', '0265']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule' => [['0264']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule' => [['0265']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule' => [['0266']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule' => [['0267']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule' => [['0268']],
		'mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule' => [['0269']],
		'PHPStan\Rules\Deprecations\DeprecatedClassHelper' => [['0270']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'stubFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
			],
			'bootstrapFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
			],
			'excludes_analyse' => [],
			'excludePaths' => [
				'analyseAndScan' => [
					'*.api.php',
					'*/tests/fixtures/*.php',
					'*/tests/Drupal/Tests/Listeners/Legacy/*',
					'*/tests/fixtures/*.php',
					'*/settings*.php',
					'*/bower_components/*',
					'*/node_modules/*',
				],
				'analyse' => [],
			],
			'level' => null,
			'paths' => [],
			'exceptions' => [
				'implicitThrows' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => false,
				'skipCheckGenericClasses' => [],
			],
			'fileExtensions' => ['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine'],
			'checkAdvancedIsset' => false,
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 1024],
			'reportUnmatchedIgnoredErrors' => false,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/var/www/html/tmp/upgrade_status/phpstan/.memory_limit',
			'tempResultCachePath' => '/var/www/html/tmp/upgrade_status/phpstan/resultCaches',
			'resultCachePath' => '/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'staticReflectionClassNamePatterns' => [
				'#^PhpParser\\\#i',
				'#^PHPStan\\\#i',
				'#^Hoa\\\#i',
				'#^Symfony\\\Polyfill\\\Php80\\\#i',
				'#^Symfony\\\Polyfill\\\Mbstring\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Normalizer\\\#i',
				'#^Symfony\\\Polyfill\\\Php73\\\#i',
				'#^Symfony\\\Polyfill\\\Php74\\\#i',
				'#^Symfony\\\Polyfill\\\Php72\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Grapheme\\\#i',
				'#^Composer\\\#i',
				'#^ReflectionUnionType$#i',
				'#^Attribute$#i',
				'#^ReturnTypeWillChange$#i',
				'#^ReflectionIntersectionType$#i',
				'#^UnitEnum$#i',
				'#^BackedEnum$#i',
				'#^ReflectionEnum$#i',
				'#^ReflectionEnumUnitCase$#i',
				'#^ReflectionEnumBackedCase$#i',
			],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
			],
			'editorUrl' => null,
			'drupal' => [
				'drupal_root' => '/var/www/html/web',
				'entityMapping' => [
					'aggregator_feed' => [
						'class' => 'Drupal\aggregator\Entity\Feed',
						'storage' => 'Drupal\aggregator\FeedStorage',
					],
					'aggregator_item' => [
						'class' => 'Drupal\aggregator\Entity\Item',
						'storage' => 'Drupal\aggregator\ItemStorage',
					],
					'block' => [
						'class' => 'Drupal\block\Entity\Block',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'block_content' => [
						'class' => 'Drupal\block_content\Entity\BlockContent',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'block_content_type' => [
						'class' => 'Drupal\block_content\Entity\BlockContentType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'comment_type' => [
						'class' => 'Drupal\comment\Entity\CommentType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'comment' => ['class' => 'Drupal\comment\Entity\Comment', 'storage' => 'Drupal\comment\CommentStorage'],
					'contact_form' => [
						'class' => 'Drupal\contact\Entity\ContactForm',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'contact_message' => [
						'class' => 'Drupal\contact\Entity\Message',
						'storage' => 'Drupal\Core\Entity\ContentEntityNullStorage',
					],
					'content_moderation_state' => [
						'class' => 'Drupal\content_moderation\Entity\ContentModerationState',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'editor' => [
						'class' => 'Drupal\editor\Entity\Editor',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'field_config' => [
						'class' => 'Drupal\field\Entity\FieldConfig',
						'storage' => 'Drupal\field\FieldConfigStorage',
					],
					'field_storage_config' => [
						'class' => 'Drupal\field\Entity\FieldStorageConfig',
						'storage' => 'Drupal\field\FieldStorageConfigStorage',
					],
					'file' => ['class' => 'Drupal\file\Entity\File', 'storage' => 'Drupal\file\FileStorage'],
					'filter_format' => [
						'class' => 'Drupal\filter\Entity\FilterFormat',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'image_style' => [
						'class' => 'Drupal\image\Entity\ImageStyle',
						'storage' => 'Drupal\image\ImageStyleStorage',
					],
					'imce_profile' => [
						'class' => 'Drupal\imce\Entity\ImceProfile',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'configurable_language' => [
						'class' => 'Drupal\language\Entity\ConfigurableLanguage',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'language_content_settings' => [
						'class' => 'Drupal\language\Entity\ContentLanguageSettings',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'media_type' => [
						'class' => 'Drupal\media\Entity\MediaType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'media' => ['class' => 'Drupal\media\Entity\Media', 'storage' => 'Drupal\media\MediaStorage'],
					'menu_link_content' => [
						'class' => 'Drupal\menu_link_content\Entity\MenuLinkContent',
						'storage' => '\Drupal\menu_link_content\MenuLinkContentStorage',
					],
					'metatag_defaults' => [
						'class' => 'Drupal\metatag\Entity\MetatagDefaults',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'node_type' => [
						'class' => 'Drupal\node\Entity\NodeType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'node' => ['class' => 'Drupal\node\Entity\Node', 'storage' => 'Drupal\node\NodeStorage'],
					'path_alias' => [
						'class' => 'Drupal\path_alias\Entity\PathAlias',
						'storage' => 'Drupal\path_alias\PathAliasStorage',
					],
					'rdf_mapping' => [
						'class' => 'Drupal\rdf\Entity\RdfMapping',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'responsive_image_style' => [
						'class' => 'Drupal\responsive_image\Entity\ResponsiveImageStyle',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'search_page' => [
						'class' => 'Drupal\search\Entity\SearchPage',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'search_api_server' => [
						'class' => 'Drupal\search_api\Entity\Server',
						'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
					],
					'search_api_index' => [
						'class' => 'Drupal\search_api\Entity\Index',
						'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
					],
					'search_api_task' => [
						'class' => 'Drupal\search_api\Entity\Task',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'shortcut_set' => [
						'class' => 'Drupal\shortcut\Entity\ShortcutSet',
						'storage' => 'Drupal\shortcut\ShortcutSetStorage',
					],
					'shortcut' => [
						'class' => 'Drupal\shortcut\Entity\Shortcut',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'action' => [
						'class' => 'Drupal\system\Entity\Action',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'menu' => ['class' => 'Drupal\system\Entity\Menu', 'storage' => 'Drupal\system\MenuStorage'],
					'taxonomy_term' => ['class' => 'Drupal\taxonomy\Entity\Term', 'storage' => 'Drupal\taxonomy\TermStorage'],
					'taxonomy_vocabulary' => [
						'class' => 'Drupal\taxonomy\Entity\Vocabulary',
						'storage' => 'Drupal\taxonomy\VocabularyStorage',
					],
					'tour' => [
						'class' => 'Drupal\tour\Entity\Tour',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'user' => ['class' => 'Drupal\user\Entity\User', 'storage' => 'Drupal\user\UserStorage'],
					'user_role' => ['class' => 'Drupal\user\Entity\Role', 'storage' => 'Drupal\user\RoleStorage'],
					'webform' => [
						'class' => 'Drupal\webform\Entity\Webform',
						'storage' => '\Drupal\webform\WebformEntityStorage',
					],
					'webform_submission' => [
						'class' => 'Drupal\webform\Entity\WebformSubmission',
						'storage' => 'Drupal\webform\WebformSubmissionStorage',
					],
					'webform_options' => [
						'class' => 'Drupal\webform\Entity\WebformOptions',
						'storage' => '\Drupal\webform\WebformOptionsStorage',
					],
					'workflow' => [
						'class' => 'Drupal\workflows\Entity\Workflow',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'pathauto_pattern' => [
						'class' => 'Drupal\pathauto\Entity\PathautoPattern',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'view' => [
						'class' => 'Drupal\views\Entity\View',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'date_format' => [
						'class' => 'Drupal\Core\Datetime\Entity\DateFormat',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_form_mode' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityFormMode',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_view_display' => [
						'class' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay',
						'storage' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplayStorage',
					],
					'entity_form_display' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityFormDisplay',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_view_mode' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityViewMode',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'base_field_override' => [
						'class' => 'Drupal\Core\Field\Entity\BaseFieldOverride',
						'storage' => 'Drupal\Core\Field\BaseFieldOverrideStorage',
					],
				],
			],
			'tmpDir' => '/var/www/html/tmp/upgrade_status/phpstan',
			'customRulesetUsed' => true,
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/var/www/html/tmp/upgrade_status/phpstan',
			'rootDir' => '/var/www/html/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/var/www/html/web',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => ['/var/www/html/web/../tmp/upgrade_status/deprecation_testing.neon'],
			'composerAutoloaderProjectPaths' => ['/var/www/html/vendor/phpstan/phpstan/..'],
			'generateBaselineFile' => null,
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
			'fixerTmpDir' => '/tmp/phpstan-fixer',
			'singleReflectionFile' => null,
			'singleReflectionInsteadOfFile' => null,
			'analysedPaths' => null,
			'analysedPathsFromConfig' => null,
			'__parametersSchema' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrapFiles' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'excludes_analyse' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'excludePaths' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\AnyOf', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyse' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
									]),
								],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
							]),
							\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyseAndScan' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
									]),
								],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
							]),
							\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyse' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
									]),
									'analyseAndScan' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
									]),
								],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
							]),
							null,
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00deprecated" => null,
					]),
					'level' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\AnyOf', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							null,
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00deprecated" => null,
					]),
					'paths' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'exceptions' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'implicitThrows' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'uncheckedExceptionRegexes' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
								]),
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'uncheckedExceptionClasses' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
								]),
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'checkedExceptionRegexes' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
								]),
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'checkedExceptionClasses' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
								]),
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'check' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'missingCheckedExceptionInThrows' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
									]),
									'tooWideThrowType' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
									]),
								],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
							]),
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
					]),
					'featureToggles' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'bleedingEdge' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'disableRuntimeReflectionProvider' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'skipCheckGenericClasses' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
								]),
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
					]),
					'fileExtensions' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkAdvancedIsset' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkAlwaysTrueInstanceof' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkAlwaysTrueStrictComparison' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkClassCaseSensitivity' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkExplicitMixed' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkFunctionArgumentTypes' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkFunctionNameCase' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkGenericClassInNonGenericObjectType' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkInternalClassCaseSensitivity' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkMissingIterableValueType' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkMissingCallableSignature' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkMissingVarTagTypehint' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkArgumentsPassedByReference' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkMaybeUndefinedVariables' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkNullables' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkThisOnly' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkUnionTypes' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkExplicitMixedMissingReturn' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkPhpDocMissingReturn' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkPhpDocMethodSignatures' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkExtraArguments' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkMissingTypehints' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkTooWideReturnTypesInProtectedAndPublicMethods' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'checkUninitializedProperties' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'tipsOfTheDay' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'reportMaybes' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'reportMaybesInMethodSignatures' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'reportMaybesInPropertyPhpDocTypes' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'reportStaticMethodSignatures' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'parallel' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'jobSize' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'processTimeout' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'float',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'maximumNumberOfProcesses' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'minimumNumberOfJobsPerProcess' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'buffer' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
					]),
					'phpVersion' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\AnyOf', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [70100.0, 80199.0],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							null,
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00deprecated" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'propertyAlwaysWrittenTags' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'propertyAlwaysReadTags' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'additionalConstructors' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'treatPhpDocTypesAsCertain' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'reportMagicMethods' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'reportMagicProperties' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'ignoreErrors' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\AnyOf', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
								\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
								]),
								\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										'path' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
									],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
								]),
								\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										'count' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										'path' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
									],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
								]),
								\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
										'paths' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [
													null,
													null,
												],
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
												"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
											]),
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
										]),
									],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
								]),
							],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'internalErrorsCountLimit' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'cache' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'nodesByStringCountMax' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
					]),
					'reportUnmatchedIgnoredErrors' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'scopeClass' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'typeAliases' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'universalObjectCratesClasses' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'stubFiles' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'earlyTerminatingMethodCalls' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'earlyTerminatingFunctionCalls' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'memoryLimitFile' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'tempResultCachePath' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'resultCachePath' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'resultCacheChecksProjectExtensionFilesDependencies' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'staticReflectionClassNamePatterns' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'dynamicConstantNames' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'customRulesetUsed' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'rootDir' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'tmpDir' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'currentWorkingDirectory' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'cliArgumentsVariablesRegistered' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'mixinExcludeClasses' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'scanFiles' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'scanDirectories' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'fixerTmpDir' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'editorUrl' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'null|string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'debugMode' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'productionMode' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'tempDir' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'additionalConfigFiles' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'generateBaselineFile' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'null|string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'analysedPaths' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'composerAutoloaderProjectPaths' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'analysedPathsFromConfig' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
						]),
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'usedLevel' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'cliAutoloadFile' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'null|string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'singleReflectionFile' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'null|string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'singleReflectionInsteadOfFile' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'null|string',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
					'drupal' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'drupal_root' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
							'entityMapping' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\AnyOf', [
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
										\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
												'class' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [
														null,
														null,
													],
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
												]),
											],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [
												null,
												null,
											],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
										]),
										\_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Structure', [
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00items" => [
												'class' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [
														null,
														null,
													],
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
												]),
												'storage' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [
														null,
														null,
													],
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
													"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
												]),
											],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [
												null,
												null,
											],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
											"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
										]),
									],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
									"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\AnyOf\x00deprecated" => null,
								]),
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
							]),
						],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
					]),
					'__parametersSchema' => \_PHPStan_723dfc51e\Nette\PhpGenerator\Dumper::createObject('_PHPStan_723dfc51e\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00type" => '_PHPStan_723dfc51e\Nette\Schema\Schema',
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsValue" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00itemsKey" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00merge" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Type\x00deprecated" => null,
					]),
				],
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00skipDefaults" => false,
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
				"\x00_PHPStan_723dfc51e\\Nette\\Schema\\Elements\\Structure\x00deprecated" => null,
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('07'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(null, ['preserveOriginalNames' => true]);
	}


	public function createService04(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService05(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService06(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('045'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService07(): PHPStan\Php\PhpVersion
	{
		return $this->getService('08')->create();
	}


	public function createService08(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('09')->create();
	}


	public function createService09(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, ['/var/www/html/vendor/phpstan/phpstan/..']);
	}


	public function createService010(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('012'));
	}


	public function createService012(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService013(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('011'), $this->getService('012'));
	}


	public function createService014(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0114'), $this->getService('stubPhpDocProvider'));
	}


	public function createService015(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('018'), $this->getService('017'), $this->getService('0107'));
	}


	public function createService016(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('010'), $this->getService('013'));
	}


	public function createService017(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService018(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver($this->getService('019'), $this->getService('038'));
	}


	public function createService019(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('038'));
	}


	public function createService020(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('010'), $this->getService('011'), $this->getService('018'));
	}


	public function createService021(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('040'));
	}


	public function createService022(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('023'), $this->getService('registry'), $this->getService('026'), 50);
	}


	public function createService023(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('025'),
			$this->getService('026'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('034'),
			false
		);
	}


	public function createService024(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper(
			$this->getService('033'),
			$this->getService('045'),
			[
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			false
		);
	}


	public function createService025(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('038'));
	}


	public function createService026(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('041'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0114'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('07'),
			$this->getService('014'),
			$this->getService('045'),
			$this->getService('typeSpecifier'),
			$this->getService('044'),
			true,
			true,
			[],
			[],
			true
		);
	}


	public function createService027(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('035'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					'/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
					'/var/www/html/tmp/upgrade_status/phpstan/resultCaches',
					$this->container->parameters['analysedPaths'],
					['/var/www/html/vendor/phpstan/phpstan/..'],
					[
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
					],
					'0',
					null,
					[
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
					],
					[],
					[],
					$fileReplacements,
					false
				);
			}
		};
	}


	public function createService028(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer(
			'/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
			'/var/www/html/tmp/upgrade_status/phpstan/resultCaches'
		);
	}


	public function createService029(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService030(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('031'),
			$this->getService('021'),
			$this->getService('027'),
			$this->getService('024'),
			'/var/www/html/tmp/upgrade_status/phpstan/.memory_limit',
			50
		);
	}


	public function createService031(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('051'),
			$this->getService('022'),
			$this->getService('050'),
			$this->getService('053')
		);
	}


	public function createService032(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('048'),
			$this->getService('027'),
			$this->getService('028'),
			$this->getService('024'),
			$this->getService('053'),
			$this->getService('051'),
			$this->parameters['analysedPaths'],
			'/var/www/html/web',
			'/tmp/phpstan-fixer',
			32
		);
	}


	public function createService033(): PHPStan\Command\IgnoredRegexValidator
	{
		return new PHPStan\Command\IgnoredRegexValidator($this->getService('regexParser'), $this->getService('020'));
	}


	public function createService034(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('045'),
			$this->getService('reflectionProvider'),
			$this->getService('036')
		);
	}


	public function createService035(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('037'));
	}


	public function createService036(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0114'), $this->getService('05'));
	}


	public function createService037(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('036'));
	}


	public function createService038(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('039'));
	}


	public function createService039(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService040(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/var/www/html/web',
			'/var/www/html/tmp/upgrade_status/phpstan',
			['/var/www/html/web/../tmp/upgrade_status/deprecation_testing.neon'],
			$this->parameters['analysedPaths'],
			['/var/www/html/vendor/phpstan/phpstan/..'],
			$this->parameters['analysedPathsFromConfig'],
			'0',
			null,
			null,
			$this->parameters['singleReflectionFile'],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createService041(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('038'));
	}


	public function createService042(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('038'));
	}


	public function createService043(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('038'));
	}


	public function createService044(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('038'));
	}


	public function createService045(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/var/www/html/web');
	}


	public function createService046(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory(
			$this->getService('047'),
			[],
			[
				'analyseAndScan' => [
					'*.api.php',
					'*/tests/fixtures/*.php',
					'*/tests/Drupal/Tests/Listeners/Legacy/*',
					'*/tests/fixtures/*.php',
					'*/settings*.php',
					'*/bower_components/*',
					'*/node_modules/*',
				],
				'analyse' => [],
			]
		);
	}


	public function createService047(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder(
					$this->container->getService('045'),
					$analyseExcludes,
					[
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
					]
				);
			}
		};
	}


	public function createService048(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService049(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService050(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService051(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService052(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService053(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService054(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $filename,
				?bool $isPure = null
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('052'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure
				);
			}
		};
	}


	public function createService055(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService056(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService057(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService058(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('057'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService059(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('058'), false);
	}


	public function createService060(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('062'),
			$this->getService('063'),
			$this->getService('061')
		);
	}


	public function createService061(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('058'),
			$this->getService('fileFinderScan'),
			$this->getService('07')
		);
	}


	public function createService062(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('061'));
	}


	public function createService063(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('065'));
			}
		};
	}


	public function createService064(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('058'),
					$fileName
				);
			}
		};
	}


	public function createService065(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('064'));
	}


	public function createService066(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService067(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService068(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('025'),
			$this->getService('026'),
			$this->getService('069'),
			$this->getService('014'),
			$this->getService('055'),
			$this->getService('056'),
			$this->getService('078'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('072'),
			$this->getService('0114'),
			false,
			['stdClass']
		);
	}


	public function createService069(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure = null
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('052'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure
				);
			}
		};
	}


	public function createService070(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService071(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass']
		);
	}


	public function createService072(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('038'));
	}


	public function createService073(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('078'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0114'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService074(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('020'));
	}


	public function createService075(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider($this->getService('074'), $this->getService('07'));
	}


	public function createService076(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('075'),
			$this->getService('058'),
			$this->getService('0114')
		);
	}


	public function createService077(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('07'),
			$this->getService('075'),
			$this->getService('076')
		);
	}


	public function createService078(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('077')->create();
	}


	public function createService079(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService080(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('092'),
			$this->getService('082')
		);
	}


	public function createService081(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0112'), false);
	}


	public function createService082(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService083(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('084'), true);
	}


	public function createService084(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService085(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService086(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('088'));
	}


	public function createService087(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('088'));
	}


	public function createService088(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService089(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('091'));
	}


	public function createService090(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0114'), $this->getService('091'));
	}


	public function createService091(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService092(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0112'),
			$this->getService('0105'),
			$this->getService('07'),
			$this->getService('0107'),
			$this->getService('0110'),
			false,
			false,
			false,
			false
		);
	}


	public function createService093(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('082'),
			$this->getService('0107'),
			$this->getService('07'),
			false,
			true
		);
	}


	public function createService094(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0112'));
	}


	public function createService095(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService096(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('097'),
			$this->getService('099'),
			false,
			[]
		);
	}


	public function createService097(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService098(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('082'),
			$this->getService('097'),
			$this->getService('0115'),
			false
		);
	}


	public function createService099(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0100(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0109'), $this->getService('0110'), false, true);
	}


	public function createService0101(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0112'),
			false,
			false
		);
	}


	public function createService0102(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0112'),
			$this->getService('082'),
			false,
			false
		);
	}


	public function createService0103(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService0104(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck($this->getService('reflectionProvider'), false, false, false, []);
	}


	public function createService0105(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0106(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('038'));
	}


	public function createService0107(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0108(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('038'));
	}


	public function createService0109(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0110(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0111(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('038'));
	}


	public function createService0112(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, true, false, false);
	}


	public function createService0113(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0114(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('072'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('016'),
			$this->getService('015'),
			$this->getService('029'),
			$this->getService('06')
		);
	}


	public function createService0115(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\TypeAliasResolver(
			[],
			$this->getService('020'),
			$this->getService('018'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0116(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0117(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('07'));
	}


	public function createService0118(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0119(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('07'));
	}


	public function createService0120(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0122(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension;
	}


	public function createService0123(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0124(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0125(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0126(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0127(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService0128(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0129(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0136(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension;
	}


	public function createService0138(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0141(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0142(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension;
	}


	public function createService0143(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0144(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0145(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0146(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(false);
	}


	public function createService0147(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0148(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0149(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0150(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0151(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0152(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0153(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0154(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0155(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0156(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('07'));
	}


	public function createService0157(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0158(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0159(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0160(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0161(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0165(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0166(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0167(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0168(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0169(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0170(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0171(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0172(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0174(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0110'));
	}


	public function createService0175(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0177(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0178(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0179(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0180(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0183(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
	}


	public function createService0184(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0185(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('07'));
	}


	public function createService0186(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0187(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0188(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0192(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0193(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0195(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension;
	}


	public function createService0197(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0198(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0201(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0203(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0204(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0205(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0206(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0207(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0208(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0209(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0210(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0211(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0212(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0213(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0173'));
	}


	public function createService0214(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0215(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0216(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0217(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0218(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService0219(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0220(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0221(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0222(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0223(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0224(): PHPStan\Type\Php\ArrayIsListFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayIsListFunctionTypeSpecifyingExtension;
	}


	public function createService0225(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0226(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass']
		);
	}


	public function createService0227(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0230(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0231(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0232(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0233(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0234(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0235(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0236(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0237(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0238(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0239(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0240(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0243'),
			$this->getService('0244'),
			$this->getService('065'),
			$this->getService('062'),
			$this->getService('060'),
			$this->getService('059'),
			[],
			[],
			$this->parameters['analysedPaths'],
			['/var/www/html/vendor/phpstan/phpstan/..'],
			$this->parameters['analysedPathsFromConfig'],
			$this->parameters['singleReflectionFile'],
			[
				'#^PhpParser\\\#i',
				'#^PHPStan\\\#i',
				'#^Hoa\\\#i',
				'#^Symfony\\\Polyfill\\\Php80\\\#i',
				'#^Symfony\\\Polyfill\\\Mbstring\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Normalizer\\\#i',
				'#^Symfony\\\Polyfill\\\Php73\\\#i',
				'#^Symfony\\\Polyfill\\\Php74\\\#i',
				'#^Symfony\\\Polyfill\\\Php72\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Grapheme\\\#i',
				'#^Composer\\\#i',
				'#^ReflectionUnionType$#i',
				'#^Attribute$#i',
				'#^ReturnTypeWillChange$#i',
				'#^ReflectionIntersectionType$#i',
				'#^UnitEnum$#i',
				'#^BackedEnum$#i',
				'#^ReflectionEnum$#i',
				'#^ReflectionEnumUnitCase$#i',
				'#^ReflectionEnumBackedCase$#i',
			]
		);
	}


	public function createService0241(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_5730edc986 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\Reflector\Reflector $reflector): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
			{
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('072'),
					$this->container->getService('041'),
					$reflector,
					$this->container->getService('0114'),
					$this->container->getService('014'),
					$this->container->getService('07'),
					$this->container->getService('073'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('054'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('06'),
					$this->container->getService('05'),
					$this->container->getService('045'),
					$this->container->getService('0243')
				);
			}
		};
	}


	public function createService0242(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('07')
		);
	}


	public function createService0243(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0242')->create();
	}


	public function createService0244(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0245(): mglaman\PHPStanDrupal\Drupal\ServiceMap
	{
		return new mglaman\PHPStanDrupal\Drupal\ServiceMap;
	}


	public function createService0246(): mglaman\PHPStanDrupal\Drupal\ExtensionMap
	{
		return new mglaman\PHPStanDrupal\Drupal\ExtensionMap;
	}


	public function createService0247(): mglaman\PHPStanDrupal\Drupal\EntityDataRepository
	{
		return new mglaman\PHPStanDrupal\Drupal\EntityDataRepository([
			'aggregator_feed' => ['class' => 'Drupal\aggregator\Entity\Feed', 'storage' => 'Drupal\aggregator\FeedStorage'],
			'aggregator_item' => ['class' => 'Drupal\aggregator\Entity\Item', 'storage' => 'Drupal\aggregator\ItemStorage'],
			'block' => ['class' => 'Drupal\block\Entity\Block', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'block_content' => [
				'class' => 'Drupal\block_content\Entity\BlockContent',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'block_content_type' => [
				'class' => 'Drupal\block_content\Entity\BlockContentType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'comment_type' => [
				'class' => 'Drupal\comment\Entity\CommentType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'comment' => ['class' => 'Drupal\comment\Entity\Comment', 'storage' => 'Drupal\comment\CommentStorage'],
			'contact_form' => [
				'class' => 'Drupal\contact\Entity\ContactForm',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'contact_message' => [
				'class' => 'Drupal\contact\Entity\Message',
				'storage' => 'Drupal\Core\Entity\ContentEntityNullStorage',
			],
			'content_moderation_state' => [
				'class' => 'Drupal\content_moderation\Entity\ContentModerationState',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'editor' => [
				'class' => 'Drupal\editor\Entity\Editor',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'field_config' => ['class' => 'Drupal\field\Entity\FieldConfig', 'storage' => 'Drupal\field\FieldConfigStorage'],
			'field_storage_config' => [
				'class' => 'Drupal\field\Entity\FieldStorageConfig',
				'storage' => 'Drupal\field\FieldStorageConfigStorage',
			],
			'file' => ['class' => 'Drupal\file\Entity\File', 'storage' => 'Drupal\file\FileStorage'],
			'filter_format' => [
				'class' => 'Drupal\filter\Entity\FilterFormat',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'image_style' => ['class' => 'Drupal\image\Entity\ImageStyle', 'storage' => 'Drupal\image\ImageStyleStorage'],
			'imce_profile' => [
				'class' => 'Drupal\imce\Entity\ImceProfile',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'configurable_language' => [
				'class' => 'Drupal\language\Entity\ConfigurableLanguage',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'language_content_settings' => [
				'class' => 'Drupal\language\Entity\ContentLanguageSettings',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'media_type' => [
				'class' => 'Drupal\media\Entity\MediaType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'media' => ['class' => 'Drupal\media\Entity\Media', 'storage' => 'Drupal\media\MediaStorage'],
			'menu_link_content' => [
				'class' => 'Drupal\menu_link_content\Entity\MenuLinkContent',
				'storage' => '\Drupal\menu_link_content\MenuLinkContentStorage',
			],
			'metatag_defaults' => [
				'class' => 'Drupal\metatag\Entity\MetatagDefaults',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'node_type' => [
				'class' => 'Drupal\node\Entity\NodeType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'node' => ['class' => 'Drupal\node\Entity\Node', 'storage' => 'Drupal\node\NodeStorage'],
			'path_alias' => [
				'class' => 'Drupal\path_alias\Entity\PathAlias',
				'storage' => 'Drupal\path_alias\PathAliasStorage',
			],
			'rdf_mapping' => [
				'class' => 'Drupal\rdf\Entity\RdfMapping',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'responsive_image_style' => [
				'class' => 'Drupal\responsive_image\Entity\ResponsiveImageStyle',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'search_page' => [
				'class' => 'Drupal\search\Entity\SearchPage',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'search_api_server' => [
				'class' => 'Drupal\search_api\Entity\Server',
				'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
			],
			'search_api_index' => [
				'class' => 'Drupal\search_api\Entity\Index',
				'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
			],
			'search_api_task' => [
				'class' => 'Drupal\search_api\Entity\Task',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'shortcut_set' => [
				'class' => 'Drupal\shortcut\Entity\ShortcutSet',
				'storage' => 'Drupal\shortcut\ShortcutSetStorage',
			],
			'shortcut' => [
				'class' => 'Drupal\shortcut\Entity\Shortcut',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'action' => [
				'class' => 'Drupal\system\Entity\Action',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'menu' => ['class' => 'Drupal\system\Entity\Menu', 'storage' => 'Drupal\system\MenuStorage'],
			'taxonomy_term' => ['class' => 'Drupal\taxonomy\Entity\Term', 'storage' => 'Drupal\taxonomy\TermStorage'],
			'taxonomy_vocabulary' => [
				'class' => 'Drupal\taxonomy\Entity\Vocabulary',
				'storage' => 'Drupal\taxonomy\VocabularyStorage',
			],
			'tour' => ['class' => 'Drupal\tour\Entity\Tour', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'user' => ['class' => 'Drupal\user\Entity\User', 'storage' => 'Drupal\user\UserStorage'],
			'user_role' => ['class' => 'Drupal\user\Entity\Role', 'storage' => 'Drupal\user\RoleStorage'],
			'webform' => ['class' => 'Drupal\webform\Entity\Webform', 'storage' => '\Drupal\webform\WebformEntityStorage'],
			'webform_submission' => [
				'class' => 'Drupal\webform\Entity\WebformSubmission',
				'storage' => 'Drupal\webform\WebformSubmissionStorage',
			],
			'webform_options' => [
				'class' => 'Drupal\webform\Entity\WebformOptions',
				'storage' => '\Drupal\webform\WebformOptionsStorage',
			],
			'workflow' => [
				'class' => 'Drupal\workflows\Entity\Workflow',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'pathauto_pattern' => [
				'class' => 'Drupal\pathauto\Entity\PathautoPattern',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'view' => ['class' => 'Drupal\views\Entity\View', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'date_format' => [
				'class' => 'Drupal\Core\Datetime\Entity\DateFormat',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_form_mode' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityFormMode',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_view_display' => [
				'class' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay',
				'storage' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplayStorage',
			],
			'entity_form_display' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityFormDisplay',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_view_mode' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityViewMode',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'base_field_override' => [
				'class' => 'Drupal\Core\Field\Entity\BaseFieldOverride',
				'storage' => 'Drupal\Core\Field\BaseFieldOverrideStorage',
			],
		]);
	}


	public function createService0248(): mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension($this->getService('0247'));
	}


	public function createService0249(): mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension($this->getService('0247'));
	}


	public function createService0250(): mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension($this->getService('0245'));
	}


	public function createService0251(): mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension($this->getService('0245'));
	}


	public function createService0252(): mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension;
	}


	public function createService0253(): mglaman\PHPStanDrupal\Type\UrlToStringDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\UrlToStringDynamicReturnTypeExtension;
	}


	public function createService0254(): mglaman\PHPStanDrupal\Type\AccessibleReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\AccessibleReturnTypeExtension;
	}


	public function createService0255(): mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension;
	}


	public function createService0256(): mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension($this->getService('0245'));
	}


	public function createService0257(): mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension($this->getService('0245'));
	}


	public function createService0258(): mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension
	{
		return new mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension;
	}


	public function createService0259(): mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension
	{
		return new mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension;
	}


	public function createService0260(): mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule
	{
		return new mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule($this->getService('reflectionProvider'));
	}


	public function createService0261(): mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule($this->getService('reflectionProvider'));
	}


	public function createService0262(): mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes($this->getService('0246'));
	}


	public function createService0263(): mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude($this->getService('0246'));
	}


	public function createService0264(): mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule($this->getService('reflectionProvider'));
	}


	public function createService0265(): mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule($this->getService('reflectionProvider'));
	}


	public function createService0266(): mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule;
	}


	public function createService0267(): mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule($this->getService('0245'));
	}


	public function createService0268(): mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule($this->getService('0245'));
	}


	public function createService0269(): mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule(
			$this->getService('reflectionProvider'),
			$this->getService('0245')
		);
	}


	public function createService0270(): PHPStan\Rules\Deprecations\DeprecatedClassHelper
	{
		return new PHPStan\Rules\Deprecations\DeprecatedClassHelper($this->getService('reflectionProvider'));
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\BetterReflection\Reflector\ClassReflector
	{
		return new PHPStan\BetterReflection\Reflector\ClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\BetterReflection\Reflector\ConstantReflector
	{
		return new PHPStan\BetterReflection\Reflector\ConstantReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\BetterReflection\Reflector\FunctionReflector
	{
		return new PHPStan\BetterReflection\Reflector\FunctionReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('072'),
			$this->getService('041'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0114'),
			$this->getService('014'),
			$this->getService('07'),
			$this->getService('073'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('054'),
			$this->getService('relativePathHelper'),
			$this->getService('06'),
			$this->getService('05'),
			$this->getService('045'),
			$this->getService('0243')
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0240')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('038'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/var/www/html/tmp/upgrade_status/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_5730edc986
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('currentPhpVersionLexer'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('currentPhpVersionLexer'),
			$this->getService('03'),
			$this->getService('04'),
			$this->getService('049')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 1024);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true, null);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('085');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('046')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('046')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderAnalyse'),
			$this->getService('045'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderScan'),
			$this->getService('045'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('072'),
			$this->getService('041'),
			$this->getService('054'),
			$this->getService('0114'),
			$this->getService('014'),
			$this->getService('07'),
			$this->getService('073'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0243')
		);
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/var/www/html/web');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('045'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return new PhpParser\Lexer\Emulative;
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			false
		);
	}


	public function createServiceRegexGrammarStream(): Hoa\File\Read
	{
		return new Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
	}


	public function createServiceRegexParser(): Hoa\Compiler\Llk\Parser
	{
		return Hoa\Compiler\Llk\Llk::load($this->getService('regexGrammarStream'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('0111')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/var/www/html/web',
			$this->parameters['analysedPaths']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112')
		);
	}


	public function createServiceRules__11(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112')
		);
	}


	public function createServiceRules__12(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__13(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112')
		);
	}


	public function createServiceRules__17(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule($this->getService('0270'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule($this->getService('0270'));
	}


	public function createServiceRules__19(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule($this->getService('0270'));
	}


	public function createServiceRules__2(): mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule;
	}


	public function createServiceRules__20(): PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule;
	}


	public function createServiceRules__21(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__3(): mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule;
	}


	public function createServiceRules__4(): mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule;
	}


	public function createServiceRules__5(): mglaman\PHPStanDrupal\Rules\Deprecations\AccessDeprecatedConstant
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\AccessDeprecatedConstant($this->getService('reflectionProvider'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112')
		);
	}


	public function createServiceRules__8(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule($this->getService('reflectionProvider'));
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0243'),
			[
				'#^PhpParser\\\#i',
				'#^PHPStan\\\#i',
				'#^Hoa\\\#i',
				'#^Symfony\\\Polyfill\\\Php80\\\#i',
				'#^Symfony\\\Polyfill\\\Mbstring\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Normalizer\\\#i',
				'#^Symfony\\\Polyfill\\\Php73\\\#i',
				'#^Symfony\\\Polyfill\\\Php74\\\#i',
				'#^Symfony\\\Polyfill\\\Php72\\\#i',
				'#^Symfony\\\Polyfill\\\Intl\\\Grapheme\\\#i',
				'#^Composer\\\#i',
				'#^ReflectionUnionType$#i',
				'#^Attribute$#i',
				'#^ReturnTypeWillChange$#i',
				'#^ReflectionIntersectionType$#i',
				'#^UnitEnum$#i',
				'#^BackedEnum$#i',
				'#^ReflectionEnum$#i',
				'#^ReflectionEnumUnitCase$#i',
				'#^ReflectionEnumBackedCase$#i',
			],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/var/www/html/web');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('defaultAnalysisParser'),
			$this->getService('0114'),
			$this->getService('038'),
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
			]
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('038'));
	}


	public function initialize()
	{
	}
}
