<x-app-layout>
    {{-- <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>

        </div>
    </x-slot> --}}
    <x-slot name='totalbalance'>

        {{-- <div class="container "> --}}
        <div class="total-balance pt-10" style="background:#243972;">
            <div>
                <h4 class="textamount">TOTAL BALANCE</h4>
            </div>
            <div>
                <h2 class="totalamount">$24 358.50</h2>
            </div>
        </div>
        <div class="parent-container">
            <div class="stats-card">
                <div class="text incomcontain">
                    <div class="circle green-circle">
                        <p> </p>
                    </div>
                    <div>
                        <h3>Total Income</h3>
                        <p>$899.12</p>
                    </div>
                </div>

                <div class="text incomcontain">
                    <div class="circle red-circle">
                        <p> </p>
                    </div>
                    <div>
                        <h3>Total Invested</h3>
                        <p>$695.05</p>
                    </div>
                </div>
            </div>
        </div>


    </x-slot>
    <x-slot name='dashboard'>
        {{-- <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1"> --}}


        <div class="container ">

            <ul style="border-bottom: none !important;" class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Completed</a>
                </li>
            </ul>
            <div class="tab-content">



                <div class="content-container">
                    <div class="content-header">
                        <div class="id">ID: XXR3E</div>
                        <div class="date">2024-06-03 12:09 AM</div>
                    </div>
                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                        <div class="status">
                            <div class="pending">Pending</div>
                            <div class="pending-icon"></div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Value</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                </div>
                <div class="content-container">
                    <div class="content-header">
                        <div class="id">ID: XXR3E</div>
                        <div class="date">2024-06-03 12:09 AM</div>
                    </div>
                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                        <div class="status">
                            <div class="pending">Pending</div>
                            <div class="pending-icon"></div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Value</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                </div>
                <div class="content-container">
                    <div class="content-header">
                        <div class="id">ID: XXR3E</div>
                        <div class="date">2024-06-03 12:09 AM</div>
                    </div>
                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                        <div class="status">
                            <div class="pending">Pending</div>
                            <div class="pending-icon"></div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Value</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                </div>



            </div>
            <div class="show-history">
                <p>SHOW ALL HISTORY</p>
            </div>
        </div>




        </div>
    </x-slot>
</x-app-layout>
