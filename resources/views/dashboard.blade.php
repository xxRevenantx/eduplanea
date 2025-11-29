<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        {{-- Fila de tarjetas --}}
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            {{-- HOY EN EL AULA --}}
            <section class="rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-4 flex flex-col gap-3">
                <header class="flex items-center justify-between gap-2">
                    <div>
                        <p class="text-[11px] font-medium uppercase tracking-[0.18em] text-neutral-500">
                            Hoy en el aula
                        </p>
                        <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">
                            Próximas clases
                        </p>
                    </div>
                    <span class="inline-flex items-center rounded-full bg-emerald-50 dark:bg-emerald-900/40 px-2 py-1 text-[11px] text-emerald-700 dark:text-emerald-200 border border-emerald-100 dark:border-emerald-800">
                        {{ now()->format('d/m') }}
                    </span>
                </header>

                <div class="mt-1 space-y-2 text-xs">
                    {{-- Ejemplos, luego los rellenas con datos reales --}}
                    <div class="flex items-center justify-between gap-2 rounded-lg bg-neutral-50 dark:bg-neutral-800/60 px-3 py-2">
                        <div>
                            <p class="font-semibold text-neutral-900 dark:text-neutral-50">
                                3° B · Español
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-400">
                                Bloque 2 · Lectura comprensiva
                            </p>
                        </div>
                        <div class="text-right text-[11px] text-neutral-500 dark:text-neutral-400">
                            <p>08:00–08:50</p>
                            <span class="inline-flex mt-1 rounded-full bg-sky-50 dark:bg-sky-900/40 px-2 py-[2px] text-sky-700 dark:text-sky-300">
                                Primaria
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-2 rounded-lg px-3 py-2">
                        <div>
                            <p class="font-semibold text-neutral-900 dark:text-neutral-50">
                                2° A · Matemáticas
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-400">
                                Problemas con fracciones
                            </p>
                        </div>
                        <p class="text-[11px] text-neutral-500 dark:text-neutral-400">
                            09:00–09:50
                        </p>
                    </div>

                    <div class="flex items-center justify-between gap-2 rounded-lg px-3 py-2">
                        <div>
                            <p class="font-semibold text-neutral-900 dark:text-neutral-50">
                                1° C · Ciencias
                            </p>
                            <p class="text-neutral-500 dark:text-neutral-400">
                                Proyecto: el agua en mi comunidad
                            </p>
                        </div>
                        <p class="text-[11px] text-neutral-500 dark:text-neutral-400">
                            10:00–10:50
                        </p>
                    </div>
                </div>
            </section>

            {{-- ESTADO DE PLANEACIONES --}}
            <section class="rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-4 flex flex-col gap-3">
                <header class="flex items-center justify-between gap-2">
                    <div>
                        <p class="text-[11px] font-medium uppercase tracking-[0.18em] text-neutral-500">
                            Planeaciones
                        </p>
                        <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">
                            Esta semana
                        </p>
                    </div>
                    <span class="text-[11px] text-neutral-500 dark:text-neutral-400">
                        Semana {{ now()->weekOfYear }}
                    </span>
                </header>

                <div class="mt-1 space-y-3 text-xs">
                    <div class="flex items-center justify-between">
                        <p class="text-neutral-500 dark:text-neutral-400">Planeaciones creadas</p>
                        <p class="font-semibold text-neutral-900 dark:text-neutral-50">8</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-neutral-500 dark:text-neutral-400">Grados cubiertos</p>
                        <p class="font-semibold text-neutral-900 dark:text-neutral-50">3 de 4</p>
                    </div>

                    <div class="space-y-1">
                        <div class="flex items-center justify-between text-[11px] text-neutral-500 dark:text-neutral-400">
                            <span>Avance semanal</span>
                            <span>80%</span>
                        </div>
                        <div class="h-2 w-full overflow-hidden rounded-full bg-neutral-100 dark:bg-neutral-800">
                            <div class="h-full w-[80%] rounded-full bg-gradient-to-r from-indigo-600 via-sky-600 to-emerald-600"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-2 pt-1">
                        <div class="rounded-lg bg-neutral-50 dark:bg-neutral-800/60 px-2.5 py-2">
                            <p class="text-[11px] text-neutral-500 dark:text-neutral-400">Primaria</p>
                            <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">4</p>
                        </div>
                        <div class="rounded-lg bg-neutral-50 dark:bg-neutral-800/60 px-2.5 py-2">
                            <p class="text-[11px] text-neutral-500 dark:text-neutral-400">Secundaria</p>
                            <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">3</p>
                        </div>
                        <div class="rounded-lg bg-neutral-50 dark:bg-neutral-800/60 px-2.5 py-2">
                            <p class="text-[11px] text-neutral-500 dark:text-neutral-400">Bachillerato</p>
                            <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">1</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ACCIONES RÁPIDAS --}}
            <section class="rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 p-4 flex flex-col gap-3">
                <header class="space-y-[2px]">
                    <p class="text-[11px] font-medium uppercase tracking-[0.18em] text-neutral-500">
                        Acciones rápidas
                    </p>
                    <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">
                        ¿Qué quieres hacer ahora?
                    </p>
                </header>

                <div class="space-y-2">
                    <a href="#"
                       class="flex items-center justify-between gap-2 rounded-lg border border-indigo-200/80 dark:border-indigo-700/80 bg-indigo-50/80 dark:bg-indigo-900/40 px-3 py-2 text-xs font-medium text-indigo-800 dark:text-indigo-100 hover:bg-indigo-100 dark:hover:bg-indigo-900 transition-colors">
                        <span>Crear nueva planeación</span>
                        <span class="text-[11px] uppercase tracking-[0.18em]">Planeación</span>
                    </a>

                    <a href="#"
                       class="flex items-center justify-between gap-2 rounded-lg border border-sky-200/80 dark:border-sky-700/80 bg-sky-50/80 dark:bg-sky-900/40 px-3 py-2 text-xs font-medium text-sky-800 dark:text-sky-100 hover:bg-sky-100 dark:hover:bg-sky-900 transition-colors">
                        <span>Crear rúbrica de evaluación</span>
                        <span class="text-[11px] uppercase tracking-[0.18em]">Rúbrica</span>
                    </a>

                    <a href="#"
                       class="flex items-center justify-between gap-2 rounded-lg border border-emerald-200/80 dark:border-emerald-700/80 bg-emerald-50/80 dark:bg-emerald-900/40 px-3 py-2 text-xs font-medium text-emerald-800 dark:text-emerald-100 hover:bg-emerald-100 dark:hover:bg-emerald-900 transition-colors">
                        <span>Registrar asistencia de hoy</span>
                        <span class="text-[11px] uppercase tracking-[0.18em]">Listas</span>
                    </a>
                </div>

                <div class="mt-2 text-[11px] text-neutral-500 dark:text-neutral-400 space-y-1">
                    <p>• 5 evidencias sin clasificar.</p>
                    <p>• 2 planeaciones con fecha próxima a vencer.</p>
                </div>
            </section>
        </div>

        {{-- PANEL PRINCIPAL: AGENDA / GRUPOS --}}
        <section class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900">
            <div class="absolute inset-0 pointer-events-none opacity-[0.03] dark:opacity-[0.05]">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/30 dark:stroke-neutral-100/30" />
            </div>

            <div class="relative h-full p-4 md:p-6 flex flex-col gap-4">
                <header class="flex items-center justify-between gap-2">
                    <div>
                        <p class="text-[11px] uppercase tracking-[0.18em] text-neutral-500">
                            Agenda de la semana
                        </p>
                        <p class="text-sm font-semibold text-neutral-900 dark:text-neutral-50">
                            Grupos y actividades
                        </p>
                    </div>
                    <div class="flex items-center gap-2 text-[11px] text-neutral-500 dark:text-neutral-400">
                        <button class="rounded-full border border-neutral-200 dark:border-neutral-700 px-2 py-1 hover:bg-neutral-50 dark:hover:bg-neutral-800">
                            Semana actual
                        </button>
                    </div>
                </header>

                <div class="flex-1 overflow-auto">
                    <div class="min-w-full space-y-3 text-xs">
                        {{-- Ejemplo de filas por día --}}
                        <div>
                            <p class="mb-1 text-[11px] font-semibold text-neutral-500 dark:text-neutral-400">
                                Lunes
                            </p>
                            <div class="grid gap-2 md:grid-cols-3">
                                <div class="rounded-lg border border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800/60 px-3 py-2">
                                    <p class="font-semibold text-neutral-900 dark:text-neutral-50">
                                        3° B · Español
                                    </p>
                                    <p class="text-neutral-500 dark:text-neutral-400">
                                        08:00–08:50 · Bloque 2
                                    </p>
                                </div>
                                <div class="rounded-lg border border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800/60 px-3 py-2">
                                    <p class="font-semibold text-neutral-900 dark:text-neutral-50">
                                        2° A · Matemáticas
                                    </p>
                                    <p class="text-neutral-500 dark:text-neutral-400">
                                        09:00–09:50 · Proyecto
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <p class="mb-1 text-[11px] font-semibold text-neutral-500 dark:text-neutral-400">
                                Martes
                            </p>
                            <div class="grid gap-2 md:grid-cols-3">
                                <div class="rounded-lg border border-neutral-200 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800/60 px-3 py-2">
                                    <p class="font-semibold text-neutral-900 dark:text-neutral-50">
                                        1° C · Ciencias
                                    </p>
                                    <p class="text-neutral-500 dark:text-neutral-400">
                                        10:00–10:50 · Evidencias de experimento
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Aquí luego iteras tus registros reales con @foreach --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
