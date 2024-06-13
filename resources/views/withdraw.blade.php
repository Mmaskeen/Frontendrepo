<x-app-layout>
    <div style="background: white; margin-top:20px">

        <div style="background: white; margin-top:20px">

        </div>
        <x-slot name='dashboard'>
            <x-slot name='totalbalance'>

                {{-- <div class="container "> --}}
                <div class="pt-200">
                    <div>
                        <h2 class="wallet-title">Wallet</h2>
                    </div>
                </div>


            </x-slot>

            <div class="walletcontainer">

                <div class="tab-content">
                    <div class="widthdraw-container" style="background: none;border:none;box-shadow:none;">

                        <div class="wallet-dev">
                            <div class="wallet-card">

                                <div class="wallet-balance">
                                    <div class="wallet-flex">
                                        <div class="wallet-label">TOTAL BALANCE</div>
                                        <div class="wallet-point">

                                            <span class="wallet-dot green"></span>
                                            <span class="wallet-detail-label">Withdrawable</span>
                                            <div class="wallet-detail-amount">$100</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wallet-details">
                                    <div class="wallet-detail">
                                        <div class="wallet-amount">$400</div>
                                        <div class="wallet-point2">

                                            <span class="wallet-dot red"></span>
                                            <span class="wallet-detail-label">Frozen</span>
                                            <div class="wallet-detail-amount">$300</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="wallet-actions">
                                    <button class="wallet-btn">Deposit</button>
                                    <button class="wallet-btn">Withdraw</button>
                                </div>
                            </div>
                        </div>

                        <form class="withraw-from" method="POST" action="">
                            @csrf
                            <div class="wallet-card withdrawfield">
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="withdrawammount" class="block w-full border-0"
                                        style="border-bottom: 1px solid #DDDDDD!important;border-radius:0px" type="number"
                                        name="withdrawammount" :value="old('withdrawammount')"
                                        placeholder="{{ __(' amount to withdraw') }}" required autofocus />
                                </x-input-with-icon-wrapper>
                                <x-input-with-icon-wrapper>
                                    <x-slot name="icon">
                                        <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                    </x-slot>
                                    <x-input withicon id="usdt" class="block w-full border-0"
                                        style="border-bottom: 1px solid #DDDDDD !important;border-radius:0px" type="number"
                                        name="usdt" :value="old('usdt')" placeholder="{{ __(' usdt trc 20 address') }}"
                                        required autofocus />
                                </x-input-with-icon-wrapper>



                            </div>



                            <div class="flex justify-center">
                                <x-button style="background: #404CB2;" class="Withdraw-btn custom-button flex-wrap w-fit m-auto gap-2">
                                    {{-- <x-heroicon-o-login class="w-6 h-6" aria-hidden="true" /> --}}
                                    <span class="withdraw-btn-text">{{ __('Submit withdrawl') }}</span>
                                </x-button>

                            </div>
                        </form>

                        <div class="mt-3 flex flex-col items-center" >

                            <span class="withdraw-detail-label">Withdrawal Instructions</span>
                            <span class="withdraw-detail-label">1- chooose the amount</span>
                            <span class="withdraw-detail-label">2- enter Trc20 network</span>
                            <span class="withdraw-detail-label">3- click submit</span>
                        </div>

                    </div>


                </div>
            </div>
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
                        <div class="withdraw-main-item">
                            <div class="withdraw-item">Withdrawal</div>
                            <div class="status">
                                <div class="wwothdraw-pending">Pending</div>
                                <div class="pending-icon"></div>
                            </div>
                        </div>
                        <div class="withdraw-main-item">
                            <div class="withdraw-item">Amount</div>
                            <div class="status">
                                <div class="wwothdraw-pending-amount">44$</div>
                            </div>
                        </div>

                        <div class="address-item">
                            <p>adress: ADLYWIIk4VfsBUT4lRxp-qsQlLZhKW8Mhg</p>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="content-header">
                            <div class="id">ID: XXR3E</div>
                            <div class="date">2024-06-03 12:09 AM</div>
                        </div>
                        <div class="withdraw-main-item">
                            <div class="withdraw-item">Withdrawal</div>
                            <div class="status">
                                <div class="wwothdraw-pending">Approved</div>
                                <div class="approve-icon"></div>
                            </div>
                        </div>
                        <div class="withdraw-main-item">
                            <div class="withdraw-item">Amount</div>
                            <div class="status">
                                <div class="wwothdraw-pending-amount">44$</div>
                            </div>
                        </div>

                        <div class="address-item">
                            <p>adress: ADLYWIIk4VfsBUT4lRxp-qsQlLZhKW8Mhg</p>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="content-header">
                            <div class="id">ID: XXR3E</div>
                            <div class="date">2024-06-03 12:09 AM</div>
                        </div>
                        <div class="withdraw-main-item">
                            <div class="withdraw-item">Withdrawal</div>
                            <div class="status">
                                <div class="wwothdraw-pending">Pending</div>
                                <div class="pending-icon"></div>
                            </div>
                        </div>
                        <div class="withdraw-main-item">
                            <div class="withdraw-item">Amount</div>
                            <div class="status">
                                <div class="wwothdraw-pending-amount">44$</div>
                            </div>
                        </div>

                        <div class="address-item">
                            <p>adress: ADLYWIIk4VfsBUT4lRxp-qsQlLZhKW8Mhg</p>
                        </div>
                    </div>



                </div>
                <div class="show-history">
                    <p>SHOW ALL HISTORY</p>
                </div>
            </div>
        </x-slot>
    </div>
</x-app-layout>
