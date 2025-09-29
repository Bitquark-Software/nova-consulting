<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- How can I add INTL SEO??? -->

    <title>Coming soon - Nova Consulting</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Seo tags -->

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #141414;
            color: #f2f2f2;
        }

        .cosmic-grid {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }
    </style>
</head>

<body class="min-h-screen relative overflow-hidden">
    <!-- Cosmic Grid Background -->
    <div class="cosmic-grid absolute inset-0 opacity-30"></div>

    <div class="relative z-10 container mx-auto px-4 flex flex-col items-center justify-center min-h-screen text-center">
        <!-- Main Content -->
        <div class="max-w-3xl space-y-8">
            <!-- Status Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-zinc-900 border border-zinc-800">
                <div class="h-2 w-2 rounded-full bg-gray-300 animate-pulse"></div>
                <span class="text-sm text-gray-400">Status: En Desarrollo</span>
            </div>

            <!-- Heading -->
            <div class="space-y-4">
                <h1 class="text-5xl md:text-7xl font-bold tracking-tighter">
                    while(true) {
                    <br />
                    <span class="text-gray-300"> building...</span>
                    <br />
                    }
                </h1>

                <div class="space-y-2">
                    <p class="text-xl md:text-2xl text-gray-400">
                        Estamos compilando algo increíble
                    </p>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                        Nuestros desarrolladores están cafeinados al máximo 💪☕
                        <br />
                        (Promise: resolvemos más rápido que un console.log())
                    </p>
                </div>
            </div>

            <!-- Fun Facts -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-8">
                <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-lg">
                    <div class="text-4xl mb-3">🚀</div>
                    <p class="text-sm text-gray-400">
                        Bugs eliminados: <span class="text-gray-200 font-semibold">∞ - 1</span>
                    </p>
                </div>
                <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-lg">
                    <div class="text-4xl mb-3">☕</div>
                    <p class="text-sm text-gray-400">
                        Cafés consumidos: <span class="text-gray-200 font-semibold">Error: Overflow</span>
                    </p>
                </div>
                <div class="bg-zinc-900 border border-zinc-800 p-6 rounded-lg">
                    <div class="text-4xl mb-3">&lt;/&gt;</div>
                    <p class="text-sm text-gray-400">
                        Líneas de código: <span class="text-gray-200 font-semibold">NaN (pero muchas)</span>
                    </p>
                </div>
            </div>
            <!-- Footer Message -->
            <div class="pt-8">
                <p class="text-sm text-gray-400 italic">
                    "Any fool can write code that a computer can understand.
                    <br />
                    Good programmers write code that humans can understand."
                    <br />
                    <span class="text-xs">- Martin Fowler (nuestro guía espiritual)</span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>