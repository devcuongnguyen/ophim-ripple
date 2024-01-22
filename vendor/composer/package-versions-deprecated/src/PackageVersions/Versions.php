<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'devcuongnguyen/ophim-ripple';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'artesaos/seotools' => 'v0.22.1@134284922f6bde4faac1b10ae85014cd380d0c53',
  'aws/aws-crt-php' => 'v1.2.4@eb0c6e4e142224a10b08f49ebf87f32611d162b2',
  'aws/aws-sdk-php' => '3.296.6@11d0a94f8b2539d587e2f6db7c2fa8e39fe78a67',
  'brick/math' => '0.11.0@0ad82ce168c82ba30d1c01ec86116ab52f589478',
  'carbonphp/carbon-doctrine-types' => '2.1.0@99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
  'ckfinder/ckfinder-laravel-package' => 'v3.5.2.1@1bf2ea0df6a3044dfe067893595ff76ee60094f2',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'creativeorange/gravatar' => 'v1.0.23@3a1b227c48091b039b967265ec13c0800c70ac79',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'digitallyhappy/assets' => '2.1.0@f4c80e1154c4572afd391c2ce5b97e2ddc11b234',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/dbal' => '3.7.3@ce594cbc39a4866c544f1a970d285ff0548221ad',
  'doctrine/deprecations' => '1.1.2@4f2d4f2836e7ec4e7a8625e75c6aa916004db931',
  'doctrine/event-manager' => '2.0.0@750671534e0241a7c50ea5b43f67e23eb5c96f32',
  'doctrine/inflector' => '2.0.9@2930cd5ef353871c821d5c43ed030d39ac8cfe65',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'dragonmantank/cron-expression' => 'v3.3.3@adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'graham-campbell/guzzle-factory' => 'v5.0.3@f93cfbffd422920f5d9915ec7d682f030ddffda6',
  'graham-campbell/result-type' => 'v1.1.2@fbd48bce38f73f8a4ec8583362e732e4095e5862',
  'guzzlehttp/guzzle' => '7.8.1@41042bc7ab002487b876a0683fc8dce04ddce104',
  'guzzlehttp/promises' => '2.0.2@bbff78d96034045e58e13dedd6ad91b5d1253223',
  'guzzlehttp/psr7' => '1.9.1@e4490cabc77465aaee90b20cfc9a770f8c04be6b',
  'devcuongnguyen/crud' => '1.0.0@dae217b370cabdec958dab215801096cdacf37fe',
  'devcuongnguyen/laravel-caching-model' => '1.1.0@2f6168aee10850858955e86a30c5b705a7dc242f',
  'devcuongnguyen/ophim-core' => '1.2.6@453374ae0c3715569bc8787209b96d5b76929343',
  'devcuongnguyen/permissionmanager' => '1.0.0@d06582c5667d5162feec02be8834761d61c423e4',
  'devcuongnguyen/settings' => '1.0.0@cf7ced386e971b5065af96dcb5fd4776418fbe53',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'laravel/framework' => 'v8.83.27@e1afe088b4ca613fb96dc57e6d8dbcb8cc2c6b49',
  'laravel/serializable-closure' => 'v1.3.3@3dbf8a8e914634c48d389c1234552666b3d43754',
  'league/commonmark' => '2.4.1@3669d6d5f7a47a93c08ddff335e6d945481a1dd5',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/flysystem-aws-s3-v3' => '1.0.30@af286f291ebab6877bac0c359c6c2cb017eb061d',
  'league/flysystem-cached-adapter' => '1.1.0@d1925efb2207ac4be3ad0c40b8277175f99ffaff',
  'league/glide' => '1.7.2@8dba756ada0b8e525bf6f1f7d1bd83c1e99e124e',
  'league/mime-type-detection' => '1.14.0@b6a5854368533df0295c5761a0253656a2e52d9e',
  'monolog/monolog' => '2.9.2@437cb3628f4cf6042cc10ae97fc2b8472e48ca1f',
  'mtdowling/jmespath.php' => '2.7.0@bbb69a935c2cbb0c03d7f481a238027430f6440b',
  'nesbot/carbon' => '2.72.1@2b3b3db0a2d0556a177392ff1a3bf5608fa09f78',
  'nette/schema' => 'v1.3.0@a6d3a6d1f545f01ef38e60f375d1cf1f4de98188',
  'nette/utils' => 'v4.0.4@d3ad0aa3b9f934602cb3e3902ebccf10be34d218',
  'nicmart/tree' => '0.3.1@c55ba47c64a3cb7454c22e6d630729fc2aab23ff',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'phpoption/phpoption' => '1.9.2@80735db690fe4fc5c76dfa7f9b770634285fa820',
  'pimple/pimple' => 'v3.5.0@a94b3a4db7fb774b3d78dad2315ddc07629e1bed',
  'prologue/alerts' => '0.4.8@a6412e318c0171526bc8b25ef597f2cc61f5b800',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.3@bb5906edc1c324c9a05aa0873d40117941e5fa90',
  'psr/http-message' => '1.1@cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '2.0.0@a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
  'ramsey/uuid' => '4.7.5@5f0df49ae5ad6efb7afa69e6bfab4e5b1e080d8e',
  'spatie/browsershot' => '3.61.0@14d75679390b8b84a71b3a17dc5905928deeb887',
  'spatie/crawler' => '6.0.2@276ecb429a770474695a1278a9ad3e719fbef259',
  'spatie/dropbox-api' => '1.22.0@5b012d68568a560d1cd8888c0be2c2805c4b7c65',
  'spatie/flysystem-dropbox' => '1.2.3@8b6b072f217343b875316ca6a4203dd59f04207a',
  'spatie/image' => '1.10.6@897e819848096ea8eee8ed4a3531c6166f9a99e0',
  'spatie/image-optimizer' => '1.7.2@62f7463483d1bd975f6f06025d89d42a29608fe1',
  'spatie/laravel-permission' => '5.11.1@7090824cca57e693b880ce3aaf7ef78362e28bbd',
  'spatie/laravel-sitemap' => '5.9.2@df5c3db511e08a8e64a3d7e28613ab018a99e95d',
  'spatie/robots-txt' => '2.0.3@dacba2ba159364987392aa1b0002e196c5923970',
  'spatie/temporary-directory' => '2.2.1@76949fa18f8e1a7f663fd2eaa1d00e0bcea0752a',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.34@4b4d8cd118484aa604ec519062113dd87abde18c',
  'symfony/css-selector' => 'v7.0.0@bb51d46e53ef8d50d523f0c5faedba056a27943e',
  'symfony/deprecation-contracts' => 'v3.4.0@7c3aff79d10325257a001fcf92d991f24fc967cf',
  'symfony/dom-crawler' => 'v5.4.32@728f1fc136252a626ba5a69c02bd66a3697ff201',
  'symfony/error-handler' => 'v5.4.29@328c6fcfd2f90b64c16efaf0ea67a311d672f078',
  'symfony/event-dispatcher' => 'v6.4.2@e95216850555cd55e71b857eb9d6c2674124603a',
  'symfony/event-dispatcher-contracts' => 'v3.4.0@a76aed96a42d2b521153fb382d418e30d18b59df',
  'symfony/finder' => 'v5.4.27@ff4bce3c33451e7ec778070e45bd23f74214cd5d',
  'symfony/http-foundation' => 'v5.4.34@4da1713e88cf9c44bd4bf65f54772681222fcbec',
  'symfony/http-kernel' => 'v5.4.34@f2b00c66d1c7ef12f3fc625af2a0bc5d5857db7b',
  'symfony/mime' => 'v5.4.26@2ea06dfeee20000a319d8407cea1d47533d5a9d2',
  'symfony/polyfill-ctype' => 'v1.28.0@ea208ce43cbb04af6867b4fdddb1bdbf84cc28cb',
  'symfony/polyfill-iconv' => 'v1.28.0@6de50471469b8c9afc38164452ab2b6170ee71c1',
  'symfony/polyfill-intl-grapheme' => 'v1.28.0@875e90aeea2777b6f135677f618529449334a612',
  'symfony/polyfill-intl-idn' => 'v1.28.0@ecaafce9f77234a6a449d29e49267ba10499116d',
  'symfony/polyfill-intl-normalizer' => 'v1.28.0@8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
  'symfony/polyfill-mbstring' => 'v1.28.0@42292d99c55abe617799667f454222c54c60e229',
  'symfony/polyfill-php72' => 'v1.28.0@70f4aebd92afca2f865444d30a4d2151c13c3179',
  'symfony/polyfill-php73' => 'v1.28.0@fe2f306d1d9d346a7fee353d0d5012e401e984b5',
  'symfony/polyfill-php80' => 'v1.28.0@6caa57379c4aec19c0a12a38b59b26487dcfe4b5',
  'symfony/process' => 'v5.4.34@8fa22178dfc368911dbd513b431cd9b06f9afe7a',
  'symfony/routing' => 'v5.4.34@f1d08ed59d7718845bb70acd7480fa7da8966ec0',
  'symfony/service-contracts' => 'v3.4.1@fe07cbc8d837f60caf7018068e350cc5163681a0',
  'symfony/string' => 'v6.4.2@7cb80bc10bfcdf6b5492741c0b9357dac66940bc',
  'symfony/translation' => 'v6.4.2@a2ab2ec1a462e53016de8e8d5e8912bfd62ea681',
  'symfony/translation-contracts' => 'v3.4.1@06450585bf65e978026bda220cdebca3f867fde7',
  'symfony/var-dumper' => 'v5.4.29@6172e4ae3534d25ee9e07eb487c20be7760fcc65',
  'tijsverkoyen/css-to-inline-styles' => 'v2.2.7@83ee6f38df0a63106a9e4536e3060458b74ccedb',
  'vlucas/phpdotenv' => 'v5.6.0@2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'devcuongnguyen/ophim-ripple' => 'dev-main@b9263764919acb708a3f61ca87dc35e5f052fdc7',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
