<?php

namespace Azmolla\BladeTryCatch;

use Illuminate\Support\Facades\Blade;

class BladeTryCatchDirective
{
    public static function register(): void
    {
        Blade::directive('try', fn() => '<?php try { ?>');
        Blade::directive('catch', fn($expr) => "<?php } catch {$expr} { ?>");
        Blade::directive('finally', fn() => '<?php } finally { ?>');
        Blade::directive('endtry', fn() => '<?php } ?>');
    }
}
