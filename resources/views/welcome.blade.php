<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EduPlanea · Plataforma docente</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
    </head>

    <body class="min-h-screen flex flex-col antialiased text-slate-900 dark:text-slate-50
                 bg-gradient-to-b from-emerald-50 via-sky-50 to-amber-50
                 dark:bg-gradient-to-b dark:from-slate-950 dark:via-slate-900 dark:to-emerald-950">

        {{-- BARRA SUPERIOR --}}
        <header class="w-full border-b border-emerald-100/70 dark:border-slate-800
                       bg-white/80 dark:bg-slate-950/80 backdrop-blur">
            <div class="container mx-auto px-6 lg:px-10 py-3 flex items-center justify-between gap-4">
                {{-- Logo / Marca --}}
                <div class="flex items-center gap-3">
                    <span
                        class="size-9 rounded-2xl bg-gradient-to-br from-emerald-500 via-sky-500 to-fuchsia-500
                               text-white flex items-center justify-center text-xs font-semibold shadow-md">
                        EP
                    </span>
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
                    <a href="#inicio" class="hover:text-emerald-600 dark:hover:text-emerald-300 transition-colors">Inicio</a>
                    <a href="#caracteristicas" class="hover:text-emerald-600 dark:hover:text-emerald-300 transition-colors">Características</a>
                    <a href="#beneficios" class="hover:text-emerald-600 dark:hover:text-emerald-300 transition-colors">Docentes</a>
                </nav>

                {{-- Botones de acceso --}}
                @if (Route::has('login'))
                    <nav class="flex items-center gap-3 text-sm">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                                       border border-emerald-500/60 text-emerald-700 dark:text-emerald-200
                                       bg-emerald-50/60 dark:bg-emerald-900/30
                                       hover:bg-emerald-100 dark:hover:bg-emerald-900/60 transition-colors"
                            >
                                Ir al panel
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                                       text-slate-800 dark:text-slate-100
                                       hover:text-emerald-600 dark:hover:text-emerald-300 transition-colors"
                            >
                                Iniciar sesión
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-medium
                                           bg-gradient-to-r from-emerald-500 via-sky-500 to-fuchsia-500
                                           text-white shadow-md hover:shadow-lg hover:brightness-110
                                           transition-all"
                                >
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </header>

        {{-- HERO / FONDO DECORATIVO --}}
        <main id="inicio" class="flex-1">

             {{-- BANNER / CARRUSEL SUPERIOR --}}
    <section class="border-b border-slate-200/70 dark:border-slate-800/80 bg-gradient-to-r from-emerald-500 via-cyan-500 to-blue-600 dark:from-emerald-500/80 dark:via-cyan-500/80 dark:to-blue-600/80">
        <div class="container mx-auto px-6 lg:px-8 py-4 lg:py-5 flex flex-col md:flex-row md:items-center gap-4 md:gap-6 text-white">

            {{-- Slides --}}
            {{-- Slides con efecto de deslizamiento --}}
<div class="flex-1">
    <div class="relative overflow-hidden min-h-[92px] md:min-h-[110px]">
        {{-- Slide 1 (inicial) --}}
        <div
            class="absolute inset-0 transition-all duration-500 ease-out opacity-100 translate-x-0 space-y-1.5"
            data-banner-slide="0"
        >
            <p class="text-[11px] uppercase tracking-[0.22em] text-white/80">
                Nuevo en EduPlanea
            </p>
            <h2 class="text-lg md:text-xl font-semibold leading-tight">
                Planea tu semana en minutos, no en horas.
            </h2>
            <p class="text-xs md:text-sm text-white/80 max-w-xl">
                Organiza tus bloques, aprendizajes esperados y actividades en un solo lugar, listo para imprimir o consultar desde el aula.
            </p>
        </div>

        {{-- Slide 2 --}}
        <div
            class="absolute inset-0 transition-all duration-500 ease-out opacity-0 translate-x-full space-y-1.5"
            data-banner-slide="1"
        >
            <p class="text-[11px] uppercase tracking-[0.22em] text-white/80">
                Rúbricas reutilizables
            </p>
            <h2 class="text-lg md:text-xl font-semibold leading-tight">
                Evalúa con claridad y comparte criterios.
            </h2>
            <p class="text-xs md:text-sm text-white/80 max-w-xl">
                Crea rúbricas por proyectos, exposiciones y productos; reutilízalas en otros grupos sin empezar desde cero.
            </p>
        </div>

        {{-- Slide 3 --}}
        <div
            class="absolute inset-0 transition-all duration-500 ease-out opacity-0 translate-x-full space-y-1.5"
            data-banner-slide="2"
        >
            <p class="text-[11px] uppercase tracking-[0.22em] text-white/80">
                Pensado para la escuela mexicana
            </p>
            <h2 class="text-lg md:text-xl font-semibold leading-tight">
                Listas y evidencias alineadas a tu contexto.
            </h2>
            <p class="text-xs md:text-sm text-white/80 max-w-xl">
                Registra asistencia, observaciones y evidencias considerando la realidad del aula en primaria, secundaria y bachillerato.
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
                    <button
                        type="button"
                        class="size-2.5 rounded-full bg-white/80 data-[active=true]:w-6 data-[active=true]:bg-white transition-all"
                        data-banner-dot="0"
                        aria-label="Slide 1"
                    ></button>
                    <button
                        type="button"
                        class="size-2.5 rounded-full bg-white/40 data-[active=true]:w-6 data-[active=true]:bg-white transition-all"
                        data-banner-dot="1"
                        aria-label="Slide 2"
                    ></button>
                    <button
                        type="button"
                        class="size-2.5 rounded-full bg-white/40 data-[active=true]:w-6 data-[active=true]:bg-white transition-all"
                        data-banner-dot="2"
                        aria-label="Slide 3"
                    ></button>
                </div>
            </div>
        </div>
    </section>


            <div class="relative overflow-hidden">

                {{-- “Auras” de fondo más coloridas --}}
                <div class="pointer-events-none absolute inset-0 opacity-70 dark:opacity-60">
                    <div class="absolute -left-24 top-10 h-56 w-56 rounded-full bg-emerald-300/50 dark:bg-emerald-500/25 blur-3xl"></div>
                    <div class="absolute -right-10 top-52 h-64 w-64 rounded-full bg-sky-300/40 dark:bg-sky-500/20 blur-3xl"></div>
                    <div class="absolute left-1/3 bottom-0 h-52 w-52 rounded-full bg-amber-300/40 dark:bg-amber-400/20 blur-3xl"></div>
                </div>

                <div class="relative container mx-auto px-6 lg:px-10 py-10 lg:py-16 space-y-14">

                    {{-- CINTA SUPERIOR --}}
                    <div class="w-full rounded-2xl border border-emerald-100/80 dark:border-emerald-900/70
                                bg-white/90 dark:bg-slate-950/90 px-4 py-3 md:px-6 md:py-4
                                flex flex-col md:flex-row items-center justify-between gap-3 shadow-sm">
                        <div class="flex items-center gap-3 text-xs text-slate-600 dark:text-slate-300">
                            <span
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full
                                       bg-emerald-50/80 dark:bg-emerald-900/60
                                       border border-emerald-200/80 dark:border-emerald-700/70
                                       text-[11px] uppercase tracking-[0.18em] text-emerald-700 dark:text-emerald-200">
                                <span class="size-2.5 rounded-full bg-emerald-500"></span>
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
                            class="relative rounded-2xl border border-emerald-100/80 dark:border-slate-800
                                   bg-white/95 dark:bg-slate-950/95
                                   shadow-[0_18px_55px_rgba(15,23,42,0.35)]
                                   p-6 md:p-10 overflow-hidden">
                            {{-- Barra superior gradiente --}}
                            <div class="absolute inset-x-0 top-0 h-1.5 bg-gradient-to-r from-emerald-500 via-sky-500 to-fuchsia-500"></div>

                            <div class="relative space-y-6">
                                {{-- Chip --}}
                                <div
                                    class="inline-flex items-center gap-2 rounded-full
                                           bg-emerald-50/80 dark:bg-emerald-900/50
                                           border border-emerald-200/80 dark:border-emerald-800
                                           px-3 py-1 text-[11px] text-emerald-700 dark:text-emerald-200">
                                    <span class="size-2.5 rounded-full bg-emerald-500"></span>
                                    <span class="uppercase tracking-[0.18em]">Organiza tu trabajo docente</span>
                                </div>

                                {{-- Título y descripción --}}
                               <div class="space-y-3">
                                        <h1 class="text-2xl md:text-3xl font-semibold leading-tight text-slate-900 dark:text-white">
                                            <span
                                                id="hero-typewriter"
                                                class="border-r-2 border-emerald-500 pr-1"
                                                data-phrases='[
                                                    "Planeaciones, listas y rúbricas que sí se parecen a tu día a día."
                                                ]'
                                            ></span>
                                        </h1>

                                        <p class="text-sm md:text-[15px] text-slate-600 dark:text-slate-300 leading-relaxed">
                                            EduPlanea organiza tu trabajo docente: planeaciones por bloque, rúbricas de evaluación,
                                            listas de asistencia y evidencias, pensando en la realidad de las escuelas en México
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
                                    <button
                                        type="button"
                                        id="open-register-modal"
                                        class="inline-flex items-center justify-center px-4 py-2 rounded-md bg-emerald-600 text-white text-sm font-medium shadow-xs hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-slate-50 dark:focus:ring-offset-slate-900 transition-all"
                                    >
                                        Crear cuenta docente
                                    </button>

                                    <a
                                        href="{{ Route::has('login') ? route('login') : '#' }}"
                                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-sm font-medium
                                               border border-slate-200 dark:border-slate-700
                                               text-slate-800 dark:text-slate-50
                                               bg-white/70 dark:bg-slate-900/60
                                               hover:border-emerald-400 hover:text-emerald-700
                                               dark:hover:border-emerald-400 dark:hover:text-emerald-200
                                               hover:bg-emerald-50/60 dark:hover:bg-emerald-900/40
                                               transition-colors"
                                    >
                                        Iniciar sesión
                                    </a>
                                </div>

                                <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-1 leading-tight">
                                    Diseñado para acompañar tu planeación didáctica sin reemplazar los lineamientos oficiales.
                                </p>
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
                                        <p class="leading-tight">Planeaciones: <span class="font-semibold text-emerald-600 dark:text-emerald-300">4</span></p>
                                        <p class="leading-tight">Rúbricas: <span class="font-semibold text-sky-600 dark:text-sky-300">3</span></p>
                                    </div>
                                </div>

                                {{-- Tarjetas --}}
                                <div class="space-y-2 text-xs">
                                    <div class="rounded-lg border border-emerald-100 dark:border-emerald-800
                                                bg-emerald-50/80 dark:bg-emerald-950/40 p-3 leading-tight">
                                        <p class="font-semibold text-slate-900 dark:text-white mb-0.5 truncate">
                                            Español · Lectura comprensiva
                                        </p>
                                        <p class="text-slate-600 dark:text-slate-300">
                                            Campo formativo: Lenguajes · Bloque 2 · Actividad 1
                                        </p>
                                    </div>
                                    <div class="rounded-lg border border-sky-100 dark:border-sky-800
                                                bg-sky-50/80 dark:bg-sky-950/40 p-3 leading-tight">
                                        <p class="font-semibold text-slate-900 dark:text-white mb-0.5 truncate">
                                            Rúbrica · Periódico mural
                                        </p>
                                        <p class="text-slate-600 dark:text-slate-300">
                                            Criterios: contenido, presentación, trabajo en equipo.
                                        </p>
                                    </div>
                                    <div class="rounded-lg border border-amber-100 dark:border-amber-800
                                                bg-amber-50/80 dark:bg-amber-950/40 p-3 leading-tight">
                                        <p class="font-semibold text-slate-900 dark:text-white mb-0.5 truncate">
                                            Lista de asistencia · Hoy
                                        </p>
                                        <p class="text-slate-600 dark:text-slate-300">
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
                                        @foreach (['Planeaciones' => 'emerald', 'Rúbricas' => 'sky', 'Listas de asistencia' => 'amber', 'Evidencias' => 'fuchsia'] as $modulo => $color)
                                            <span class="inline-flex items-center px-3 py-1 rounded-full
                                                         bg-{{ $color }}-50/80 dark:bg-{{ $color }}-900/40
                                                         border border-{{ $color }}-200/80 dark:border-{{ $color }}-700/70
                                                         text-slate-800 dark:text-slate-100">
                                                {{ $modulo }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            {{-- Subcards --}}
                            <div class="grid md:grid-cols-2 gap-3 text-xs">
                                <div class="rounded-xl border border-emerald-100 dark:border-emerald-900
                                            bg-white/90 dark:bg-slate-950/95 p-3 space-y-1.5 shadow-sm">
                                    <p class="text-[11px] uppercase tracking-[0.18em] text-emerald-600 dark:text-emerald-300 mb-[2px]">
                                        Próxima entrega
                                    </p>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white leading-tight">
                                        Reporte de evaluación
                                    </p>
                                    <p class="text-slate-600 dark:text-slate-300 leading-tight">
                                        Viernes · 12:00 p.m. · Coordinación académica
                                    </p>
                                </div>

                                <div class="rounded-xl border border-sky-100 dark:border-sky-900
                                            bg-white/90 dark:bg-slate-950/95 p-3 space-y-1.5 shadow-sm">
                                    <p class="text-[11px] uppercase tracking-[0.18em] text-sky-600 dark:text-sky-300 mb-[2px]">
                                        Evento cívico
                                    </p>
                                    <p class="text-sm font-semibold text-slate-900 dark:text-white leading-tight">
                                        Ensayo de desfile
                                    </p>
                                    <p class="text-slate-600 dark:text-slate-300 leading-tight">
                                        Lunes · 8:00 a.m. · Patio escolar
                                    </p>
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
                                <span class="h-1.5 w-6 rounded-full bg-gradient-to-r from-emerald-500 via-sky-500 to-fuchsia-500"></span>
                                Todo lo que usas en el aula, pero organizado.
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4 text-sm">
                            <div class="rounded-xl border border-emerald-100 dark:border-emerald-900
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                                <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                    Planeaciones estructuradas
                                </p>
                                <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                    Crea planeaciones por campo formativo, aprendizaje esperado y actividades, listas para imprimir o consultar en el salón.
                                </p>
                            </div>

                            <div class="rounded-xl border border-sky-100 dark:border-sky-900
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                                <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                    Evaluación con rúbricas
                                </p>
                                <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                    Define niveles de logro, puntajes y criterios y reutiliza tus rúbricas en otros grupos.
                                </p>
                            </div>

                            <div class="rounded-xl border border-amber-100 dark:border-amber-900
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                                <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                    Listas y evidencias
                                </p>
                                <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                    Registra asistencia, observaciones y vincula evidencias como trabajos, fotos o documentos.
                                </p>
                            </div>
                        </div>
                    </section>

                    {{-- BENEFICIOS --}}
                    <section id="beneficios" class="space-y-4">
                        <div class="space-y-1">
                            <p class="text-[11px] uppercase tracking-[0.18em] text-slate-500">
                                Para el docente
                            </p>
                            <h2 class="text-sm font-semibold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="h-1.5 w-6 rounded-full bg-gradient-to-r from-amber-400 via-emerald-500 to-sky-500"></span>
                                Menos tiempo en papeles, más tiempo con tus alumnos.
                            </h2>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4 text-sm">
                            <div class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                                <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                    Ahorra tiempo administrativo
                                </p>
                                <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                    Ten todo en un mismo lugar y evita rehacer formatos cada ciclo escolar.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 dark:border-slate-800
                                        bg-white/95 dark:bg-slate-950 p-4 space-y-2 shadow-sm">
                                <p class="font-semibold text-slate-900 dark:text-white leading-tight">
                                    Claridad en tu semana
                                </p>
                                <p class="text-slate-600 dark:text-slate-300 text-xs leading-normal">
                                    Visualiza qué grupos, asignaturas o proyectos tienes pendientes de un vistazo.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>

        {{-- FOOTER --}}
        <footer class="w-full border-t border-slate-200/80 dark:border-slate-800 mt-6
                       bg-white/80 dark:bg-slate-950/90 backdrop-blur">
            <div class="container mx-auto px-6 lg:px-10 py-4 text-[11px] text-slate-500 dark:text-slate-400 text-center">
                <p class="leading-tight">
                    EduPlanea · Plataforma para docentes ·
                    <span class="underline underline-offset-4 decoration-emerald-500">
                        Escuela mexicana
                    </span>
                </p>
            </div>
        </footer>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('hero-typewriter');
    if (!el) return;

    const phrases = JSON.parse(el.dataset.phrases || '[]');
    if (!phrases.length) return;

    let phraseIndex = 0;
    let charIndex = 0;
    let deleting = false;

    const TYPING_SPEED = 70;   // ms por carácter
    const DELETING_SPEED = 40; // ms al borrar
    const PAUSE_END = 1500;    // pausa cuando termina de escribir
    const PAUSE_START = 800;   // pausa antes de empezar a borrar

    function type() {
        const current = phrases[phraseIndex];

        if (!deleting) {
            // Escribiendo
            el.textContent = current.slice(0, charIndex + 1);
            charIndex++;

            if (charIndex === current.length) {
                // Pausa al final del texto
                setTimeout(() => {
                    deleting = true;
                    type();
                }, PAUSE_END);
                return;
            }
        } else {
            // Borrando
            el.textContent = current.slice(0, charIndex - 1);
            charIndex--;

            if (charIndex === 0) {
                deleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;

                setTimeout(() => {
                    type();
                }, PAUSE_START);
                return;
            }
        }

        const delay = deleting ? DELETING_SPEED : TYPING_SPEED;
        setTimeout(type, delay);
    }

    type();
});

document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('[data-banner-slide]');
    const dots = document.querySelectorAll('[data-banner-dot]');
    if (!slides.length || !dots.length) return;

    let current = 0;
    const TOTAL = slides.length;
    let intervalId = null;

    function setActiveDot(index) {
        dots.forEach((dot, i) => {
            dot.dataset.active = i === index ? 'true' : 'false';
        });
    }

    function goToSlide(nextIndex, manual = false) {
        if (nextIndex === current) return;

        const prevIndex = current;
        const direction =
            nextIndex > prevIndex || (prevIndex === TOTAL - 1 && nextIndex === 0)
                ? 1
                : -1;

        const prevSlide = slides[prevIndex];
        const nextSlide = slides[nextIndex];

        // Reset clases para todos los slides
        slides.forEach((slide, i) => {
            slide.classList.remove(
                'opacity-100',
                'opacity-0',
                'translate-x-0',
                'translate-x-full',
                '-translate-x-full'
            );

            // Estado base: fuera de vista a la derecha
            if (i !== nextIndex && i !== prevIndex) {
                slide.classList.add('opacity-0', 'translate-x-full');
            }
        });

        // Slide anterior sale
        prevSlide.classList.add('opacity-0');
        prevSlide.classList.add(direction === 1 ? '-translate-x-full' : 'translate-x-full');

        // Slide nuevo entra
        nextSlide.classList.add('opacity-100', 'translate-x-0');

        current = nextIndex;
        setActiveDot(current);

        // Si fue clic manual, reinicia autoplay
        if (manual && intervalId) {
            clearInterval(intervalId);
            intervalId = setInterval(() => {
                const next = (current + 1) % TOTAL;
                goToSlide(next, false);
            }, 7000);
        }
    }

    // Eventos en los dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index, true);
        });
    });

    // Estado inicial
    setActiveDot(0);

    // Autoplay con deslizamiento
    intervalId = setInterval(() => {
        const next = (current + 1) % TOTAL;
        goToSlide(next, false);
    }, 3000);
});


document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.getElementById('open-register-modal');
    const modal = document.getElementById('register-modal');

    if (!openBtn || !modal) return;

    const panel = modal.querySelector('[data-modal-panel]');
    const closeBtn = document.getElementById('close-register-modal');
    const backdrop = modal.querySelector('div.absolute.inset-0');

    function openModal() {
        modal.setAttribute('aria-hidden', 'false');
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100', 'pointer-events-auto');

        // Panel animación
        if (panel) {
            panel.classList.remove('opacity-0', '-translate-y-4', 'scale-95');
            panel.classList.add('opacity-100', 'translate-y-0', 'scale-100');
        }

        document.addEventListener('keydown', handleEsc);
    }

    function closeModal() {
        modal.setAttribute('aria-hidden', 'true');
        modal.classList.remove('opacity-100', 'pointer-events-auto');
        modal.classList.add('opacity-0', 'pointer-events-none');

        if (panel) {
            panel.classList.remove('opacity-100', 'translate-y-0', 'scale-100');
            panel.classList.add('opacity-0', '-translate-y-4', 'scale-95');
        }

        document.removeEventListener('keydown', handleEsc);
    }

    function handleEsc(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    }

    openBtn.addEventListener('click', (e) => {
        e.preventDefault();
        openModal();
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => closeModal());
    }

    if (backdrop) {
        backdrop.addEventListener('click', () => closeModal());
    }
});


        </script>


{{-- MODAL: Crear cuenta docente --}}
<div
    id="register-modal"
    class="fixed inset-0 z-40 flex items-center justify-center bg-slate-900/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300"
    aria-hidden="true"
>
    {{-- Cerrar al hacer clic en el fondo --}}
    <div class="absolute inset-0"></div>

    {{-- Panel --}}
    <div
        class="relative w-full max-w-md mx-4 transform rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-700/80 shadow-[0_18px_45px_rgba(15,23,42,0.55)] px-5 py-5 md:px-6 md:py-6 opacity-0 -translate-y-4 scale-95 transition-all duration-300"
        data-modal-panel
        role="dialog"
        aria-modal="true"
        aria-labelledby="register-modal-title"
    >
        {{-- Botón cerrar --}}
        <button
            type="button"
            id="close-register-modal"
            class="absolute top-3 right-3 inline-flex items-center justify-center rounded-full p-1.5 text-slate-500 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-800 transition-colors"
            aria-label="Cerrar"
        >
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
                <h2
                    id="register-modal-title"
                    class="text-lg font-semibold leading-tight text-slate-900 dark:text-white"
                >
                    Crea tu cuenta en EduPlanea
                </h2>
                <p class="text-xs md:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                    Podrás configurar tus grupos, planeaciones, rúbricas y listas de asistencia en un mismo lugar.
                    El registro toma solo unos minutos.
                </p>
            </div>

            {{-- Opciones de registro --}}
            <div class="space-y-3 text-sm">
                <a
                    href="{{ Route::has('register') ? route('register') : '#' }}"
                    class="flex items-center justify-between gap-2 rounded-lg border border-emerald-500/80 bg-emerald-500 text-white px-4 py-2.5 text-xs md:text-sm font-medium shadow-xs hover:bg-emerald-600 hover:border-emerald-600 transition-all"
                >
                    <span>Registrarme con mi correo</span>
                    <span class="inline-flex items-center text-[11px] uppercase tracking-[0.18em]">
                        Continuar
                        <svg class="w-3.5 h-3.5 ms-1" viewBox="0 0 20 20" fill="none">
                            <path d="M7 4l6 6-6 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>

                <div class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50/60 dark:bg-slate-900/60 px-4 py-3 space-y-1.5">
                    <p class="text-[11px] font-semibold text-slate-800 dark:text-slate-100 uppercase tracking-[0.16em]">
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




    </body>

</html>
