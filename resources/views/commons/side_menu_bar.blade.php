@auth
    <div id="menu-container">
        @switch(auth()->user()->scope)
            @case("M")
                @php ($MP = "master.BM_index") @endphp
                @break
            @case("A")
                @php ($MP = "admin.BM_index") @endphp
                @break
            @default
                @php ($MP = "user.BM_index") @endphp
        @endswitch
        <ul class="menu-list accordion">
            <li class="menu-fixed" data-option_counter=0>
                <a class="head" href="{{ route('BM_index') }}">
                    {{ __("BM/general/menu_lateral.App main page") }}
                </a>
            </li>
            <li class="menu-fixed" data-option_counter=1>
                <a class="head" href="{{ route($MP) }}">
                    {{ __("BM/general/menu_lateral.User main page") }}
                </a>
            </li>
            @php
                $groupCounter = 0;
                $optionCounter = 2;
            @endphp
            @foreach ($side_menu->options() as $group)
                <li class="toggle accordion-toggle" data-group_counter={{ $groupCounter }}>
                    <span class="icon-plus"></span>
                    <a class="menu-link" href="#">{{ __("BM/general/menu_lateral.$group->rotulo") }}</a>
                </li>
                @php $groupCounter ++; @endphp
                {{-- accordion-toggle --}}
                <ul class="menu-submenu accordion-content">
                    @foreach ($group->options as $option)
                        <li data-option_counter={{ $optionCounter }}>
                            <a class="head" href="{{ route($option->ruta) }}">
                                <span class="{{ $option->icono }}" style="width:30px; text-align:left;"></span>
                                {{ __("BM/general/menu_lateral.$option->rotulo") }}
                            </a>
                        </li>
                        @php $optionCounter ++; @endphp
                    @endforeach
                </ul>
                {{-- menu-submenu accordon-content--}}
            @endforeach

        </ul>
    </div>
    {{-- menu-container --}}
@endauth
