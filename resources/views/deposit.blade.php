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

                    <div class="history-container" style="background: none;border:none;box-shadow:none;">

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

                    <div class="qr-design">
                        <div class="qrimg">
                            <img src="{{ asset('QR_cod2.png') }}" alt="">

                        </div>
                        <div class="qrcode">
                            ADLYWIIK4VFSBUT4LRXP-QSQLLZHKW8MHG
                        </div>
                        <div class="qr-instractions">

                            DEPOSIT INSTRUCTIONS
                            <br>

                            1-SCAN THE QR CODE TO DEPOSIT OR COPY THE ADDRESS AND SEND THE USDT MANUALY. <br>
                            2-MAKE SURE YOU SELECT USDT TRC20 NETWORK. <br>
                            3-WAIT FOR THE FUNDS TO ARRIVE, IT MIGHT TAKE 20-30 MINUTES TO APPEAR ON YOUR WALLET.


                        </div>
                    </div>
                </div>




            </div>
            </div>
        </x-slot>
    </div>
</x-app-layout>
