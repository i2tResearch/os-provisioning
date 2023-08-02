<?php
/**
 * Copyright (c) NMS PRIME GmbH ("NMS PRIME Community Version")
 * and others – powered by CableLabs. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at:
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
?>
@extends ('Layout.default')

@php
    // actually this should be named contentMid now as there are 4 sections from left to right
    // where you can place content (leftLeft, left, right, rightRight)
    $leftMdSizeXl = $leftMdSizeLg = 12;
    $flex = '';

    if (! empty($__env->yieldContent('contentLeftLeft'))) {
        $leftMdSizeXl -= $mdSizes['leftLeftXl'];
        $leftMdSizeLg -= $mdSizes['leftLeftLg'];
        $flex = 'flex:1;';
    }

    if (! empty($__env->yieldContent('contentRightRight'))) {
        $leftMdSizeXl -= $mdSizes['rightRightXl'];
        $leftMdSizeLg -= $mdSizes['rightRightLg'];
    }

    $fullscreenRoutes = [
        'TreeErd.show',
        'TreeTopo.show',
        'CustomerModem.showDiagrams',
        'CustomerRect.show',
        'CustomerPoly.show',
        'CustomerTopo.show',
        'CustomerTopo.show_impaired',
        'CustomerModem.showModems',
        'CustomerTopo.show_prox',
        'VicinityGraph.show',
        'CoreMon.net.overview',
        'CoreMon.topology'
    ];

    if (in_array($routeName = request()->route()->getName(), $fullscreenRoutes)) {
        $flex = 'flex:1 auto;';
    }

    if (! isset($firstTab)) {
        $firstTab = $routeName;
    }
@endphp

@section ('content')
    <div class="flex flex-wrap-reverse" style="{{ $flex }}">

        @yield('contentLeftLeft')
        <div class="flex flex-1 overflow-y-auto">
            <div class="flex flex-1 card card-inverse">
                <ul class="flex py-2 space-x-2 list-none dark:bg-slate-800 dark:text-slate-100">
                    @yield('content_top')
                </ul>
                @if(isset($tabs))
                <div class="flex pt-0 px-2 dark:bg-slate-900 bg-slate-300 border-b border-gray-300 dark:border-slate-900 d-print-none shadow-md">
                    <ul id="tabs" class="flex w-full items-center pt-1 px-2 nav card-header-tabs nms-tabs text-black dark:text-slate-100">
                        @foreach ($tabs as $tab)
                            {{-- Logging tab --}}
                            @if ($tab['name'] == "Logging")
                                <li class="order-12 ml-auto p-1 !px-3 border-b-2 border-transparent hover:border-white hover:bg-slate-200 dark:hover:bg-slate-800 " role="tab">
                                    <a id="loggingtab" class="p-0" href="#logging" data-toggle="tab">
                                        <div class="flex items-center dark:text-slate-100 text-gray-800">
                                            <i class="fa fa-{{ $tab['icon'] ?? 'history' }}"></i>
                                            <div>Logging</div>
                                        </div>
                                    </a>
                                </li>
                                @continue
                            @endif

                            {{-- Link to separate view --}}
                            @if (isset($tab['route']))
                                <li class="p-1 !px-3 border-b-2 hover:bg-slate-200 dark:hover:bg-slate-800 {{ $routeName == $tab['route'] ? ' border-cyan-500' : 'border-transparent hover:border-white'}}" role="tab">
                                    <a href="{{ route($tab['route'], is_array($tab['link']) ? $tab['link'] : [$tab['link']]) }}{{ $routeName == $tab['route'] ? '#' : ''}}" class="{{ $routeName == $tab['route'] ? 'active' : ''}} p-0">
                                        <span class="dark:text-slate-100 text-gray-800">
                                        @if (isset($tab['icon']))
                                            <i class="fa fa-{{ $tab['icon'] }}"></i>
                                        @endif
                                        {{ Lang::has('view.tab.'.$tab['name']) ? trans('view.tab.'.$tab['name']) : $tab['name'] }}
                                        </span>
                                    </a>
                                </li>
                                @continue
                            @endif

                            {{-- Other tabs --}}
                            {{-- probably the <a> tag must be set to active according to docu --}}
                            <li class="p-1 !px-3 border-b-2 hover:bg-slate-200 dark:hover:bg-slate-800 {{ $firstTab == $tab['name'] ? ' border-cyan-500' : 'border-transparent hover:border-white'}}" role="tab">
                                <a id="{{$tab['name'].'tab'}}" class="{{ $firstTab == $tab['name'] ? 'active' : '' }} p-0" href="#{{ $tab['name'] }}" data-toggle="tab">
                                    <span class="dark:text-slate-100 text-gray-800">
                                    @if (isset($tab['icon']))
                                        <i class="fa fa-{{$tab['icon']}}"></i>
                                    @endif
                                    {{ Lang::has('view.tab.'.$tab['name']) ? trans('view.tab.'.$tab['name']) : $tab['name'] }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="flex-wrap flex dark:bg-slate-900 mt-3.5 dark:mt-0" style="display:flex;flex: 1;">
                    <div class="card card-inverse pb-3 col-lg-{{(!isset($relations) || empty($relations)) ? '12' : $edit_left_md_size}}" style="{{ (isset($withHistory) || in_array(\Request::route()->getName(), $fullscreenRoutes)) ? 'display:flex;flex: 1;' : '' }}">
                        @yield('content_left')
                    </div>
                    @yield('content_right')
                </div>
            </div>
        </div>
        @yield('contentRightRight')

    </div>

    @yield('contentBottom')
@stop
