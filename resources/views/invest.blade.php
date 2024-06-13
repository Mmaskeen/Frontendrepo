<x-app-layout>
   <div style="background:#243972">
    <x-slot name='totalbalance'>

        {{-- <div class="container "> --}}
        <div class="invest-style pt-8" style="background:#243972; border-radius:0px;color:#fff">
            <div>
                <h2 class="totalamount">Invest</h2>
            </div>
        </div>


    </x-slot>
    <x-slot name='dashboard'>
        {{-- <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1"> --}}


        <div class="investcontainer" style="background:#243972; border-radius:0px">

            <div class="tab-content">



                <div class="content-container">

                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Price</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                    <div class="content-header">
                    </div>

                    <div class="invest-btn" >
                        <button  class="btn">INVEST</button>
                    </div>
                </div>
                <div class="content-container">

                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Price</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                    <div class="content-header">
                    </div>

                    <div class="invest-btn" >
                        <button  class="btn">INVEST</button>
                    </div>
                </div>
                <div class="content-container">

                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Price</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                    <div class="content-header">
                    </div>

                    <div class="invest-btn" >
                        <button  class="btn">INVEST</button>
                    </div>
                </div>
                <div class="content-container">

                    <div class="item">
                        <div class="item-name">Apple Airpods</div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('MME73 1.png') }}"
                            alt="Airpods" class="item-image">
                        <div class="item-namevalue">Price</div>
                        <div class="item-value">44$</div>
                    </div>

                    <div class="item">
                        <div class="item-name"><span class="commission">Commission</span></div>
                        <div class="item-value">3$</div>
                    </div>
                    <div class="content-header">
                    </div>

                    <div class="invest-btn" >
                        <button  class="btn">INVEST</button>
                    </div>
                </div>




            </div>

        </div>




        </div>
    </x-slot>
   </div>
</x-app-layout>
