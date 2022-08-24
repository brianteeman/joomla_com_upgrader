<?php
/**
 * Joomla 3 Component Upgrade Rectors
 *
 * @copyright  2022 Nicholas K. Dionysopoulos
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

declare (strict_types=1);

namespace RectorPrefix202208;

use Rector\Config\RectorConfig;
use Rector\Naming\Config\JoomlaLegacyPrefixToNamespace;
use Rector\Naming\Rector\FileWithoutNamespace\JoomlaLegacyToNamespacedRector;

return static function (RectorConfig $rectorConfig) : void {
	$rectorConfig->ruleWithConfiguration(
		JoomlaLegacyToNamespacedRector::class,
		[
			new JoomlaLegacyPrefixToNamespace('Example', '\\Acme\\Example', [
				'Example',
				'ExampleFoobar',
			])
		]
	);
};
