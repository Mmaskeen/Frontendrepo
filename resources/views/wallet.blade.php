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

                        <div class="history-container">
                            <ul style="border-bottom: none !important;"
                                class="walletnav nav-tabs justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Deposit</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Withdraw</a>
                                </li>
                            </ul>

                            <div class="transaction-section">
                                <div class="date-label">14 Jule</div>
                                <div class="transaction-item">
                                    <div class="wallet-text-history">
                                        <span class="walletcircle"></span>
                                        <div class="item-label">Deposit +</div>
                                    </div>
                                    <div class="item-value positive-value">
                                        <div class="wallet-time">
                                            02:03 PM
                                        </div>
                                        <div class="wallet-ammount">
                                            + $600,50
                                        </div>
                                       </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="wallet-text-history">
                                        <span class="walletcircle"></span>
                                        <div class="item-label">referral bonus +</div>
                                    </div>
                                    <div class="item-value positive-value">
                                        <div class="wallet-time">
                                            01:50 PM
                                        </div>
                                        <div class="wallet-ammount">
                                            + 5$
                                        </div>
                                       </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="wallet-text-history">
                                        <span class="walletcircle"></span>
                                        <div class="item-label">Withdraw -</div>
                                    </div>
                                    <div class="item-value positive-value">
                                        <div class="wallet-time">
                                            10:42 AM
                                        </div>
                                        <div class="wallet-ammount-negative">
                                            - $18,40
                                        </div>
                                       </div>
                                </div>
                            </div>
                            <div class="transaction-section">
                                <div class="date-label">13 Jule</div>
                                <div class="transaction-item">
                                    <div class="wallet-text-history">
                                        <span class="walletcircle"></span>
                                        <div class="item-label">Deposit +</div>
                                    </div>
                                    <div class="item-value positive-value">
                                        <div class="wallet-time">
                                            02:03 PM
                                        </div>
                                        <div class="wallet-ammount">
                                            + $600,50
                                        </div>
                                       </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="wallet-text-history">
                                        <span class="walletcircle"></span>
                                        <div class="item-label">Withdraw -</div>
                                    </div>
                                    <div class="item-value positive-value">
                                        <div class="wallet-time">
                                            01:50 PM
                                        </div>
                                        <div class="wallet-ammount-negative">
                                            - $10,17
                                        </div>
                                       </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>




            </div>
        </x-slot>
    </div>
</x-app-layout>
