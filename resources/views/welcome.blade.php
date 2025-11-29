<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EduPlanea · Plataforma docente</title>

    <link rel="icon" href="{{ asset('logotipo.svg') }}" type="image/svg+xml">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300..1000&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>


<body
    class="min-h-screen flex flex-col antialiased text-slate-900 dark:text-slate-50
                 bg-slate-50 dark:bg-slate-950">

    {{-- BARRA SUPERIOR --}}
    <header
        class="fixed top-0 inset-x-0 z-40 border-b border-slate-200 dark:border-slate-800
               bg-white/90 dark:bg-slate-950/90 backdrop-blur">
        <div class="container mx-auto px-6 lg:px-10 py-3 flex items-center justify-between gap-4">
            {{-- Logo / Marca --}}
            <div class="flex items-center gap-3">
                <img src="{{ asset('logotipo.svg') }}" alt="Logo EduPlanea" class="size-9">
                <div class="leading-tight">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-slate-500 dark:text-slate-400 mb-[2px]">
                        Plataforma docente
                    </p>
                    <p class="text-sm font-semibold text-slate-900 dark:text-white">
                        EduPlanea
                    </p>
                </div>
            </div>

            {{-- Navegación --}}
            <nav class="hidden md:flex items-center gap-6 text-xs font-medium text-slate-600 dark:text-slate-300">
                <a href="#inicio" class="hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">Inicio</a>
                <a href="#caracteristicas"
                    class="hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">Características</a>
                <a href="#docentes"
                    class="hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">Docentes</a>
            </nav>

            {{-- Botones de acceso --}}
            @if (Route::has('login'))
                <nav class="flex items-center gap-3 text-sm">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                                       border border-indigo-600/70 text-indigo-800 dark:text-indigo-200
                                       bg-indigo-50/80 dark:bg-indigo-900/40
                                       hover:bg-indigo-100 dark:hover:bg-indigo-900/60 transition-colors">
                            Ir al panel
                        </a>

                    @else
                        {{-- <a href="{{ route('login') }}"
                            class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                                       text-slate-800 dark:text-slate-100
                                       hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">
                            Iniciar sesión
                        </a> --}}

                        <button type="button" id="open-login-modal"
                            class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                        text-slate-800 dark:text-slate-100
                        hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">
                            Iniciar sesión
                        </button>


                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                                           bg-gradient-to-r from-indigo-700 via-sky-700 to-emerald-700
                                           text-white shadow-md hover:shadow-lg hover:brightness-110
                                           transition-all">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    {{-- HERO / FONDO DECORATIVO --}}
    <main id="inicio" class="flex-1 pt-20">


        {{-- BANNER / CARRUSEL SUPERIOR --}}
        <section
            class="border-b border-slate-200/70 dark:border-slate-800/80
                            bg-gradient-to-r from-indigo-800 via-sky-800 to-emerald-800
                            dark:from-indigo-900 dark:via-sky-900 dark:to-emerald-900">
            <div
                class="container mx-auto px-6 lg:px-8 py-4 lg:py-5 flex flex-col md:flex-row md:items-center gap-4 md:gap-6 text-white">

                {{-- Slides --}}
                <div class="flex-1">
                    <div class="relative overflow-hidden min-h-[92px] md:min-h-[110px]">
                        {{-- Slide 1 --}}
                        <div class="absolute inset-0 transition-all duration-500 ease-out opacity-100 translate-x-0 space-y-1.5"
                            data-banner-slide="0">
                            <p class="text-[11px] uppercase tracking-[0.22em] text-white/80">
                                Nuevo en EduPlanea
                            </p>
                            <h2 class="text-lg md:text-xl font-semibold leading-tight">
                                Planea tu semana en minutos, no en horas.
                            </h2>
                            <p class="text-xs md:text-sm text-white/80 max-w-xl">
                                Organiza tus bloques, aprendizajes esperados y actividades en un solo lugar, listo para
                                imprimir o consultar desde el aula.
                            </p>
                        </div>

                        {{-- Slide 2 --}}
                        <div class="absolute inset-0 transition-all duration-500 ease-out opacity-0 translate-x-full space-y-1.5"
                            data-banner-slide="1">
                            <p class="text-[11px] uppercase tracking-[0.22em] text-white/80">
                                Rúbricas reutilizables
                            </p>
                            <h2 class="text-lg md:text-xl font-semibold leading-tight">
                                Evalúa con claridad y comparte criterios.
                            </h2>
                            <p class="text-xs md:text-sm text-white/80 max-w-xl">
                                Crea rúbricas por proyectos, exposiciones y productos; reutilízalas en otros grupos sin
                                empezar desde cero.
                            </p>
                        </div>

                        {{-- Slide 3 --}}
                        <div class="absolute inset-0 transition-all duration-500 ease-out opacity-0 translate-x-full space-y-1.5"
                            data-banner-slide="2">
                            <p class="text-[11px] uppercase tracking-[0.22em] text-white/80">
                                Pensado para la escuela mexicana
                            </p>
                            <h2 class="text-lg md:text-xl font-semibold leading-tight">
                                Listas y evidencias alineadas a tu contexto.
                            </h2>
                            <p class="text-xs md:text-sm text-white/80 max-w-xl">
                                Registra asistencia, observaciones y evidencias considerando la realidad del aula en
                                primaria, secundaria y bachillerato.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Mini tarjetas de niveles + controles --}}
                <div class="flex flex-col gap-3 md:w-[260px] shrink-0">
                    <div class="grid grid-cols-3 gap-2 text-[10px]">
                        <div class="rounded-lg bg-white/15 backdrop-blur-sm px-3 py-2">
                            <p class="font-semibold leading-tight">Primaria</p>
                            <p class="text-white/70">Planeaciones por grado y bloque.</p>
                        </div>
                        <div class="rounded-lg bg-white/15 backdrop-blur-sm px-3 py-2">
                            <p class="font-semibold leading-tight">Secundaria</p>
                            <p class="text-white/70">Rúbricas por proyecto y producto.</p>
                        </div>
                        <div class="rounded-lg bg-white/15 backdrop-blur-sm px-3 py-2">
                            <p class="font-semibold leading-tight">Bachillerato</p>
                            <p class="text-white/70">Listas y evidencias por grupo.</p>
                        </div>
                    </div>

                    {{-- Dots del carrusel --}}
                    <div class="flex items-center justify-end gap-2">
                        <button type="button"
                            class="size-2.5 rounded-full bg-white/80 data-[active=true]:w-6 data-[active=true]:bg-white transition-all"
                            data-banner-dot="0" aria-label="Slide 1"></button>
                        <button type="button"
                            class="size-2.5 rounded-full bg-white/40 data-[active=true]:w-6 data-[active=true]:bg-white transition-all"
                            data-banner-dot="1" aria-label="Slide 2"></button>
                        <button type="button"
                            class="size-2.5 rounded-full bg-white/40 data-[active=true]:w-6 data-[active=true]:bg-white transition-all"
                            data-banner-dot="2" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </section>

        <div class="relative overflow-hidden">

            {{-- Auras de fondo más sobrias --}}
            <div class="pointer-events-none absolute inset-0 opacity-50 dark:opacity-50">
                <div
                    class="absolute -left-24 top-10 h-56 w-56 rounded-full bg-indigo-200/60 dark:bg-indigo-500/25 blur-3xl">
                </div>
                <div class="absolute -right-10 top-52 h-64 w-64 rounded-full bg-sky-200/50 dark:bg-sky-500/25 blur-3xl">
                </div>
                <div
                    class="absolute left-1/3 bottom-0 h-52 w-52 rounded-full bg-emerald-200/50 dark:bg-emerald-500/25 blur-3xl">
                </div>
            </div>

            <div class="relative container mx-auto px-6 lg:px-10 py-10 lg:py-16 space-y-14">

                {{-- CINTA SUPERIOR --}}
                <div
                    class="w-full rounded-2xl border border-slate-200 dark:border-slate-800
                                bg-white/95 dark:bg-slate-950/95 px-4 py-3 md:px-6 md:py-4
                                flex flex-col md:flex-row items-center justify-between gap-3 shadow-sm">
                    <div class="flex items-center gap-3 text-xs text-slate-600 dark:text-slate-300">
                        <span
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full
                                       bg-emerald-50/90 dark:bg-emerald-900/40
                                       border border-emerald-200/80 dark:border-emerald-800
                                       text-[11px] uppercase tracking-[0.18em] text-emerald-800 dark:text-emerald-200">
                            <span class="size-2.5 rounded-full bg-emerald-600"></span>
                            Hecho para la escuela mexicana
                        </span>
                        <span class="hidden md:block">
                            Planeaciones · Rúbricas · Listas · Evidencias, en un mismo sistema.
                        </span>
                    </div>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400">
                        Ideal para primaria, secundaria y bachillerato.
                    </p>
                </div>

                {{-- HERO PRINCIPAL --}}
                <section class="grid lg:grid-cols-[1.15fr,1fr] gap-8 items-stretch" id="hero">
                    {{-- Columna izquierda --}}
                    <div
                        class="relative rounded-2xl border border-slate-200 dark:border-slate-800
                                   bg-white/95 dark:bg-slate-950/95
                                   shadow-[0_18px_55px_rgba(15,23,42,0.35)]
                                   p-6 md:p-10 overflow-hidden">
                        {{-- Barra superior gradiente --}}
                        <div
                            class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-indigo-700 via-sky-700 to-emerald-700">
                        </div>


                        <div class="grid grid-cols-1 md:grid-cols-3 gap-7 items-center">
                            {{-- Columna izquierda --}}
                            <div class="relative space-y-6 md:col-span-2">
                                {{-- Chip --}}
                                <div
                                    class="inline-flex items-center gap-2 rounded-full
                                    bg-indigo-50/90 dark:bg-indigo-900/40
                                    border border-indigo-200/80 dark:border-indigo-800
                                    px-3 py-1 text-[11px] text-indigo-800 dark:text-indigo-200">
                                    <span class="size-2.5 rounded-full bg-indigo-600"></span>
                                    <span class="uppercase tracking-[0.18em]">Organiza tu trabajo docente</span>
                                </div>

                                {{-- Título y descripción --}}
                                <div class="space-y-3">
                                    <h1
                                        class="text-2xl md:text-3xl font-semibold leading-tight text-slate-900 dark:text-white">
                                        <span id="hero-typewriter" class="border-r-2 border-indigo-600 pr-1"
                                            data-phrases='[
                                            "Haz que EduPlanea sea tu compañero en el trabajo docente."
                                        ]'></span>
                                    </h1>

                                    <p
                                        class="text-sm md:text-[15px] text-slate-600 dark:text-slate-300 leading-relaxed">
                                        EduPlanea organiza tu trabajo docente: planeaciones por bloque, rúbricas de
                                        evaluación,
                                        listas de asistencia y evidencias, pensando en la realidad de las escuelas en
                                        México
                                        y en las demandas de tu plantel.
                                    </p>
                                </div>

                                {{-- Bullets --}}
                                <ul class="space-y-1.5 text-sm text-slate-600 dark:text-slate-300">
                                    <li>• Planeaciones por grado, grupo, campo formativo y aprendizaje esperado.</li>
                                    <li>• Rúbricas reutilizables para proyectos, exposiciones y productos.</li>
                                    <li>• Listas de asistencia y control de evidencias en un mismo lugar.</li>
                                </ul>

                                {{-- CTA principal --}}
                                <div class="flex flex-col sm:flex-row gap-3 mt-3">

                                     {{-- Botones de acceso --}}
                                @if (Route::has('login'))
                                    <nav class="flex items-center gap-3 text-sm">
                                        @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-indigo-700 text-white text-sm font-medium shadow-xs hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 focus:ring-offset-slate-50 dark:focus:ring-offset-slate-900 transition-all">
                                            Ir al panel docente
                                        </a>
                                        @else

                                        <button type="button" id="open-register-modal"
                                        class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-indigo-700 text-white text-sm font-medium shadow-xs hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 focus:ring-offset-slate-50 dark:focus:ring-offset-slate-900 transition-all">
                                        Crear cuenta docente
                                    </button>

                                    <a href="{{ Route::has('login') ? route('login') : '#' }}"
                                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-sm font-medium
                                        border border-slate-200 dark:border-slate-700
                                        text-slate-800 dark:text-slate-50
                                        bg-white/80 dark:bg-slate-900/70
                                        hover:border-indigo-400 hover:text-indigo-700
                                        dark:hover:border-indigo-400 dark:hover:text-indigo-200
                                        hover:bg-slate-50 dark:hover:bg-slate-900
                                        transition-colors">
                                        Iniciar sesión
                                    </a>
                                        @endauth
                                    </nav>
                                @endif


                                </div>

                                <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-1 leading-tight">
                                    Diseñado para acompañar tu planeación didáctica sin reemplazar los lineamientos
                                    oficiales.
                                </p>
                            </div>

                            {{-- Columna derecha: carrusel de imágenes --}}
                            <div class="relative">
                                <div>


                                    {{-- Carrusel --}}
                                    <div
                                        class="relative overflow-hidden rounded-xl border border-slate-200/80 dark:border-slate-800 bg-slate-50/80 dark:bg-slate-900/70 flex-1">
                                        <div class="aspect-[4/3] relative">
                                            {{-- Slide 1 --}}
                                            <img src="{{ asset('teacher.jpg') }}"
                                                alt="Planeación semanal en EduPlanea"
                                                class="absolute inset-0 w-full h-full object-cover
                                            opacity-100 translate-x-0
                                            transition-all duration-500 ease-out"
                                                data-hero-image-slide="0">

                                            {{-- Slide 2 --}}
                                            <img src="{{ asset('teacher.jpg') }}"
                                                alt="Rúbricas de evaluación en EduPlanea"
                                                class="absolute inset-0 w-full h-full object-cover
                                            opacity-0 translate-x-full
                                            transition-all duration-500 ease-out"
                                                data-hero-image-slide="1">

                                            {{-- Slide 3 --}}
                                            <img src="{{ asset('teacher.jpg') }}"
                                                alt="Listas de asistencia y evidencias en EduPlanea"
                                                class="absolute inset-0 w-full h-full object-cover
                                            opacity-0 translate-x-full
                                            transition-all duration-500 ease-out"
                                                data-hero-image-slide="2">
                                        </div>

                                        {{-- Dots --}}
                                        <div class="flex items-center justify-center gap-2 py-3">
                                            <button type="button"
                                                class="h-1.5 w-5 rounded-full bg-slate-300/80 dark:bg-slate-700/80
                                            data-[active=true]:bg-indigo-600 data-[active=true]:w-7
                                            transition-all"
                                                data-hero-image-dot="0" aria-label="Imagen 1"></button>
                                            <button type="button"
                                                class="h-1.5 w-5 rounded-full bg-slate-300/60 dark:bg-slate-700/60
                                            data-[active=true]:bg-indigo-600 data-[active=true]:w-7
                                            transition-all"
                                                data-hero-image-dot="1" aria-label="Imagen 2"></button>
                                            <button type="button"
                                                class="h-1.5 w-5 rounded-full bg-slate-300/60 dark:bg-slate-700/60
                                            data-[active=true]:bg-indigo-600 data-[active=true]:w-7
                                            transition-all"
                                                data-hero-image-dot="2" aria-label="Imagen 3"></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                    {{-- Columna derecha: tablero --}}
                    <div class="space-y-4">
                        <div
                            class="rounded-2xl border border-slate-200/80 dark:border-slate-800
                                       bg-white/95 dark:bg-slate-950/95
                                       shadow-[0_14px_40px_rgba(15,23,42,0.32)] p-5 space-y-4">
                            {{-- Encabezado --}}
                            <div class="flex items-center justify-between gap-2">
                                <div class="space-y-[2px]">
                                    <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500 mb-[2px]">
                                        Hoy · Panel docente
                                    </p>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white leading-tight">
                                        3° B · Planeación semanal
                                    </p>
                                </div>
                                <div class="text-right text-xs text-slate-500 dark:text-slate-300">
                                    <p class="leading-tight">Planeaciones: <span
                                            class="font-semibold text-indigo-700 dark:text-indigo-300">4</span></p>
                                    <p class="leading-tight">Rúbricas: <span
                                            class="font-semibold text-sky-700 dark:text-sky-300">3</span></p>
                                </div>
                            </div>

                            {{-- Tarjetas --}}
                            <div class="space-y-2 text-xs">
                                <div
                                    class="rounded-lg border border-indigo-100 dark:border-indigo-800
                                                bg-indigo-50/90 dark:bg-indigo-950/40 p-3 leading-tight">
                                    <p class="font-semibold text-slate-900 dark:text-white mb-0.5 truncate">
                                        Español · Lectura comprensiva
                                    </p>
                                    <p class="text-slate-700 dark:text-slate-300">
                                        Campo formativo: Lenguajes · Bloque 2 · Actividad 1
                                    </p>
                                </div>
                                <div
                                    class="rounded-lg border border-sky-100 dark:border-sky-800
                                                bg-sky-50/90 dark:bg-sky-950/40 p-3 leading-tight">
                                    <p class="font-semibold text-slate-900 dark:text-white mb-0.5 truncate">
                                        Rúbrica · Periódico mural
                                    </p>
                                    <p class="text-slate-700 dark:text-slate-300">
                                        Criterios: contenido, presentación, trabajo en equipo.
                                    </p>
                                </div>
                                <div
                                    class="rounded-lg border border-emerald-100 dark:border-emerald-800
                                                bg-emerald-50/90 dark:bg-emerald-950/40 p-3 leading-tight">
                                    <p class="font-semibold text-slate-900 dark:text-white mb-0.5 truncate">
                                        Lista de asistencia · Hoy
                                    </p>
                                    <p class="text-slate-700 dark:text-slate-300">
                                        28 alumnos · 2 retardos · 1 falta
                                    </p>
                                </div>
                            </div>

                            {{-- Chips --}}
                            <div class="pt-2 border-t border-slate-200/70 dark:border-slate-800 space-y-2">
                                <p class="text-[11px] text-slate-500 dark:text-slate-400 leading-tight">
                                    Módulos incluidos:
                                </p>
                                <div class="flex flex-wrap gap-2 text-[11px]">
                                    @foreach (['Planeaciones' => 'indigo', 'Rúbricas' => 'sky', 'Listas de asistencia' => 'emerald', 'Evidencias' => 'amber'] as $modulo => $color)
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full
                                                         bg-{{ $color }}-50/90 dark:bg-{{ $color }}-900/40
                                                         border border-{{ $color }}-200/80 dark:border-{{ $color }}-700/70
                                                         text-slate-800 dark:text-slate-100">
                                            {{ $modulo }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                {{-- CARACTERÍSTICAS --}}
                <section id="caracteristicas" class="space-y-4">
                    <div class="space-y-1">
                        <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500">
                            Características
                        </p>
                        <h2 class="text-sm font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                            <span
                                class="h-1.5 w-6 rounded-full bg-gradient-to-r from-indigo-700 via-sky-700 to-emerald-700"></span>
                            Todo lo que usas en el aula, pero organizado.
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4 text-sm">
                        <div
                            class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                            <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                Planeaciones estructuradas
                            </p>
                            <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                Crea planeaciones por campo formativo, aprendizaje esperado y actividades, listas para
                                imprimir o consultar en el salón.
                            </p>
                        </div>

                        <div
                            class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                            <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                Evaluación con rúbricas
                            </p>
                            <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                Define niveles de logro, puntajes y criterios y reutiliza tus rúbricas en otros grupos.
                            </p>
                        </div>

                        <div
                            class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                            <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                Listas y evidencias
                            </p>
                            <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                Registra asistencia, observaciones y vincula evidencias como trabajos, fotos o
                                documentos.
                            </p>
                        </div>
                    </div>
                </section>

                {{-- DOCENTES --}}
                <section id="docentes" class="space-y-4">
                    <div class="space-y-1">
                        <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500">
                            Para el docente
                        </p>
                        <h2 class="text-sm font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                            <span
                                class="h-1.5 w-6 rounded-full bg-gradient-to-r from-amber-500 via-indigo-600 to-sky-600"></span>
                            Menos tiempo en papeles, más tiempo con tus alumnos.
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4 text-sm">
                        <div
                            class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                            <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                Ahorra tiempo administrativo
                            </p>
                            <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                Ten todo en un mismo lugar y evita rehacer formatos cada ciclo escolar.
                            </p>
                        </div>

                        <div
                            class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                            <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                Claridad en tu semana
                            </p>
                            <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                Visualiza qué grupos, asignaturas o proyectos tienes pendientes de un vistazo.
                            </p>
                        </div>
                    </div>

                    {{-- CARRUSEL CON COMENTARIOS --}}
                    <section aria-labelledby="testimonios-heading" class="space-y-4">
                        <div class="space-y-1">
                            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500">
                                Docentes opinan
                            </p>
                            <h2 id="testimonios-heading"
                                class="text-sm font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span
                                    class="h-1.5 w-6 rounded-full bg-gradient-to-r from-sky-600 via-indigo-600 to-emerald-600"></span>
                                Comentarios de quienes ya organizan su trabajo con EduPlanea.
                            </h2>
                        </div>

                        <div
                            class="rounded-2xl border border-slate-200/80 dark:border-slate-800
                                   bg-white/95 dark:bg-slate-950/95
                                   shadow-[0_14px_40px_rgba(15,23,42,0.28)]
                                   px-4 py-5 md:px-6 md:py-6 space-y-4">

                            {{-- Encabezado --}}
                            <div class="flex items-center justify-between gap-3">
                                <div class="space-y-[2px]">
                                    <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500">
                                        Experiencias reales
                                    </p>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white leading-tight">
                                        Menos hojas, más claridad en el aula.
                                    </p>
                                </div>
                                <div class="hidden sm:flex items-center gap-1 text-amber-500 text-xs">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-amber-50/80 dark:bg-amber-900/40 px-2 py-1 border border-amber-100/80 dark:border-amber-700/70 text-[10px] font-medium text-amber-700 dark:text-amber-200">
                                        ★★★★★
                                        <span class="ml-1 text-[10px] text-slate-500 dark:text-slate-300">
                                            Valoración promedio
                                        </span>
                                    </span>
                                </div>
                            </div>

                            {{-- Carrusel --}}
                            <div class="relative overflow-hidden mt-2">
                                <div class="min-h-[130px] md:min-h-[140px] relative">

                                    {{-- Slide 1 --}}
                                    <article
                                        class="absolute inset-0 flex flex-col justify-between gap-3
                                               opacity-100 translate-x-0
                                               transition-all duration-500 ease-out"
                                        data-testimonial-slide="0">
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-9 w-9 rounded-full bg-gradient-to-br from-indigo-700 to-sky-600
                                                       text-white flex items-center justify-center text-xs font-semibold shadow-sm">
                                                LM
                                            </div>
                                            <div class="space-y-1">
                                                <p
                                                    class="text-xs font-semibold text-slate-900 dark:text-white leading-tight">
                                                    Laura Martínez
                                                    <span
                                                        class="ml-1 text-[11px] font-normal text-slate-500 dark:text-slate-400">
                                                        · Primaria · 4° grado
                                                    </span>
                                                </p>
                                                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                                    “Antes tenía mis planeaciones en varios archivos distintos. Con
                                                    EduPlanea tengo mis
                                                    semanas, listas y rúbricas en un mismo lugar y solo imprimo lo que
                                                    necesito.”
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                            <span>Usando EduPlanea desde hace 3 meses</span>
                                            <span class="inline-flex items-center gap-1">
                                                <span class="text-amber-500">★★★★★</span>
                                                <span class="hidden sm:inline">Organización semanal</span>
                                            </span>
                                        </div>
                                    </article>

                                    {{-- Slide 2 --}}
                                    <article
                                        class="absolute inset-0 flex flex-col justify-between gap-3
                                               opacity-0 translate-x-full
                                               transition-all duration-500 ease-out"
                                        data-testimonial-slide="1">
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-9 w-9 rounded-full bg-gradient-to-br from-sky-600 to-indigo-600
                                                       text-white flex items-center justify-center text-xs font-semibold shadow-sm">
                                                JR
                                            </div>
                                            <div class="space-y-1">
                                                <p
                                                    class="text-xs font-semibold text-slate-900 dark:text-white leading-tight">
                                                    José Ramírez
                                                    <span
                                                        class="ml-1 text-[11px] font-normal text-slate-500 dark:text-slate-400">
                                                        · Secundaria · Español
                                                    </span>
                                                </p>
                                                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                                    “Las rúbricas me han ayudado a que mis alumnos entiendan mejor cómo
                                                    serán evaluados.
                                                    Copio, ajusto y reutilizo sin empezar de cero cada periodo.”
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                            <span>Rúbricas para proyectos y exposiciones</span>
                                            <span class="inline-flex items-center gap-1">
                                                <span class="text-amber-500">★★★★☆</span>
                                                <span class="hidden sm:inline">Evaluación clara</span>
                                            </span>
                                        </div>
                                    </article>

                                    {{-- Slide 3 --}}
                                    <article
                                        class="absolute inset-0 flex flex-col justify-between gap-3
                                               opacity-0 translate-x-full
                                               transition-all duration-500 ease-out"
                                        data-testimonial-slide="2">
                                        <div class="flex items-start gap-3">
                                            <div
                                                class="h-9 w-9 rounded-full bg-gradient-to-br from-emerald-600 to-indigo-700
                                                       text-white flex items-center justify-center text-xs font-semibold shadow-sm">
                                                AC
                                            </div>
                                            <div class="space-y-1">
                                                <p
                                                    class="text-xs font-semibold text-slate-900 dark:text-white leading-tight">
                                                    Ana Cruz
                                                    <span
                                                        class="ml-1 text-[11px] font-normal text-slate-500 dark:text-slate-400">
                                                        · Bachillerato · Matemáticas
                                                    </span>
                                                </p>
                                                <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                                    “Lo que más valoro es tener las listas de asistencia, observaciones
                                                    y evidencias en un
                                                    solo panel. En consejo técnico, ya llevo todo listo.”
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-400">
                                            <span>Listas, observaciones y evidencias</span>
                                            <span class="inline-flex items-center gap-1">
                                                <span class="text-amber-500">★★★★★</span>
                                                <span class="hidden sm:inline">Consejo técnico</span>
                                            </span>
                                        </div>
                                    </article>
                                </div>

                                {{-- Dots --}}
                                <div class="flex items-center justify-center gap-2 mt-4">
                                    <button type="button"
                                        class="h-1.5 w-5 rounded-full bg-slate-300/80 dark:bg-slate-700/80
                                               data-[active=true]:bg-indigo-600 data-[active=true]:w-7
                                               transition-all"
                                        data-testimonial-dot="0" aria-label="Comentario 1"></button>
                                    <button type="button"
                                        class="h-1.5 w-5 rounded-full bg-slate-300/60 dark:bg-slate-700/60
                                               data-[active=true]:bg-indigo-600 data-[active=true]:w-7
                                               transition-all"
                                        data-testimonial-dot="1" aria-label="Comentario 2"></button>
                                    <button type="button"
                                        class="h-1.5 w-5 rounded-full bg-slate-300/60 dark:bg-slate-700/60
                                               data-[active=true]:bg-indigo-600 data-[active=true]:w-7
                                               transition-all"
                                        data-testimonial-dot="2" aria-label="Comentario 3"></button>
                                </div>
                            </div>
                        </div>
                    </section>

                </section>

            </div>
        </div>
    </main>

    {{-- FOOTER --}}
    <footer
        class="w-full border-t border-slate-200/80 dark:border-slate-800 mt-6
                       bg-white/90 dark:bg-slate-950/95 backdrop-blur">
        <div class="container mx-auto px-6 lg:px-10 py-4 text-[11px] text-slate-500 dark:text-slate-400 text-center">
            <p class="leading-tight">
                EduPlanea · Plataforma para docentes ·
                <span class="underline underline-offset-4 decoration-indigo-600">
                    Escuela mexicana
                </span>
            </p>
        </div>
    </footer>



    {{-- MODAL: Crear cuenta docente --}}
    <div id="register-modal"
        class="fixed inset-0 z-40 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300"
        aria-hidden="true">
        {{-- Cerrar al hacer clic en el fondo --}}
        <div class="absolute inset-0"></div>

        {{-- Panel --}}
        <div class="relative w-full max-w-md mx-4 transform rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-700/80 shadow-[0_18px_45px_rgba(15,23,42,0.55)] px-5 py-5 md:px-6 md:py-6 opacity-0 -translate-y-4 scale-95 transition-all duration-300"
            data-modal-panel role="dialog" aria-modal="true" aria-labelledby="register-modal-title">
            {{-- Botón cerrar --}}
            <button type="button" id="close-register-modal"
                class="absolute top-3 right-3 inline-flex items-center justify-center rounded-full p-1.5 text-slate-500 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-800 transition-colors"
                aria-label="Cerrar">
                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none">
                    <path d="M5 5l10 10M15 5L5 15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
            </button>

            {{-- Contenido --}}
            <div class="space-y-4">
                <div class="space-y-1.5">
                    <p class="text-[11px] uppercase tracking-[0.18em] text-emerald-600 dark:text-emerald-300">
                        Registro docente
                    </p>
                    <h2 id="register-modal-title"
                        class="text-lg font-semibold leading-tight text-slate-900 dark:text-white">
                        Crea tu cuenta en EduPlanea
                    </h2>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                        Podrás configurar tus grupos, planeaciones, rúbricas y listas de asistencia en un mismo lugar.
                        El registro toma solo unos minutos.
                    </p>
                </div>

                {{-- Opciones de registro --}}
                <div class="space-y-3 text-sm">
                    <a href="{{ Route::has('register') ? route('register') : '#' }}"
                        class="flex items-center justify-between gap-2 rounded-lg border border-emerald-500/80 bg-emerald-500 text-white px-4 py-2.5 text-xs md:text-sm font-medium shadow-xs hover:bg-emerald-600 hover:border-emerald-600 transition-all">
                        <span>Registrarme con mi correo</span>
                        <span class="inline-flex items-center text-[11px] uppercase tracking-[0.18em]">
                            Continuar
                            <svg class="w-3.5 h-3.5 ms-1" viewBox="0 0 20 20" fill="none">
                                <path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>

                    <div
                        class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50/60 dark:bg-slate-900/60 px-4 py-3 space-y-1.5">
                        <p
                            class="text-[11px] font-semibold text-slate-800 dark:text-slate-100 uppercase tracking-[0.16em]">
                            Antes de empezar
                        </p>
                        <ul class="text-xs text-slate-600 dark:text-slate-300 space-y-1.5">
                            <li>• Ten a la mano tus grados y grupos.</li>
                            <li>• Puedes usar tu correo institucional o personal.</li>
                            <li>• Podrás editar tu información en cualquier momento.</li>
                        </ul>
                    </div>
                </div>

                {{-- Nota pequeña --}}
                <p class="text-[11px] text-slate-500 dark:text-slate-400 leading-tight">
                    EduPlanea acompaña tu trabajo docente, sin reemplazar los lineamientos oficiales de la SEP ni de tu
                    institución.
                </p>
            </div>
        </div>
    </div>

    {{-- MODAL: Iniciar sesión --}}
    <div id="login-modal"
        class="fixed inset-0 z-40 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300"
        aria-hidden="true">
        {{-- Cerrar al hacer clic en el fondo --}}
        <div class="absolute inset-0"></div>

        {{-- Panel --}}
        <div class="relative w-full max-w-md mx-4 transform rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-700/80 shadow-[0_18px_45px_rgba(15,23,42,0.55)] px-5 py-5 md:px-6 md:py-6 opacity-0 -translate-y-4 scale-95 transition-all duration-300"
            data-modal-panel role="dialog" aria-modal="true" aria-labelledby="login-modal-title">
            {{-- Botón cerrar --}}
            <button type="button" id="close-login-modal"
                class="absolute top-3 right-3 inline-flex items-center justify-center rounded-full p-1.5 text-slate-500 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-800 transition-colors"
                aria-label="Cerrar">
                <svg class="w-4 h-4" viewBox="0 0 20 20" fill="none">
                    <path d="M5 5l10 10M15 5L5 15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
            </button>

            {{-- Contenido --}}
            <div class="space-y-5">
                {{-- Encabezado --}}
                <div class="space-y-1.5">
                    <p class="text-[11px] uppercase tracking-[0.18em] text-indigo-600 dark:text-indigo-300">
                        Acceso docente
                    </p>
                    <h2 id="login-modal-title"
                        class="text-lg font-semibold leading-tight text-slate-900 dark:text-white">
                        Inicia sesión en EduPlanea
                    </h2>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                        Ingresa tu correo y contraseña para acceder a tus planeaciones, rúbricas, listas de asistencia y
                        demás módulos de EduPlanea.
                    </p>
                </div>

                {{-- Mensaje de estado de sesión --}}
                <x-auth-session-status class="text-center text-xs" :status="session('status')" />

                {{-- Formulario de inicio de sesión --}}
                <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-4">
                    @csrf

                    {{-- Email --}}
                    <flux:input name="email" :label="__('Email address')" :value="old('email')" type="email"
                        required autofocus autocomplete="email" placeholder="email@example.com" />

                    {{-- Password + link "olvidé mi contraseña" --}}
                    <div class="relative">
                        <flux:input name="password" :label="__('Password')" type="password" required
                            autocomplete="current-password" :placeholder="__('Password')" viewable />

                        @if (Route::has('password.request'))
                            <flux:link class="absolute top-0 text-[11px] md:text-xs end-0 mt-1"
                                :href="route('password.request')" wire:navigate>
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </flux:link>
                        @endif
                    </div>

                    {{-- Remember me --}}
                     <flux:checkbox name="remember" :label="__('Remember me')" :checked="old('remember')" />

                    {{-- Botón de acceso --}}
                    <div class="flex flex-col gap-2 mt-1">
                        <flux:button variant="primary" type="submit" class="w-full justify-center"
                            data-test="login-button">
                            {{ __('Iniciar sesión') }}
                        </flux:button>

                        @if (Route::has('register'))
                            <p class="text-[11px] md:text-xs text-slate-500 dark:text-slate-400 text-center">
                                {{ __('¿No tienes una cuenta?') }}
                                <flux:link :href="route('register')" wire:navigate>
                                    {{ __('Regístrate') }}
                                </flux:link>
                            </p>
                        @endif
                    </div>
                </form>

                {{-- Nota pequeña --}}
                <p class="text-[11px] text-slate-500 dark:text-slate-400 leading-tight">
                    Si tienes problemas para iniciar sesión, ponte en contacto con el administrador de tu plantel o
                    revisa
                    que tu correo esté registrado correctamente.
                </p>
            </div>
        </div>
    </div>


    @include('partials.up')

</body>

</html>
