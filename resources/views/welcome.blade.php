<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    @if (session('info'))
        <div class="alert alert-info shadow-lg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-current flex-shrink-0 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ session('info') }}</span>
            </div>
        </div>
    @endif
    <h1 class="text-3xl font-bold underline text-center">
        Account & Point
    </h1>
    <div class="overflow-x-auto mx-5">
        <!-- The button to open modal -->
        <label for="my-modal" class="btn">open modal</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Account add</h3>
                <form action="{{ route('account.add') }}" method="POST">
                    @csrf
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">What is your name?</span>
                        </label>
                        <input type="text" name="name" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="modal-action">
                        <button for="my-modal" class="btn">Save</button>
                    </div>
                </form>

            </div>
        </div>
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <td>Total Point</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($accounts as $account)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $account->name }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1 class="text-3xl font-bold underline text-center">
        Table Transaction
    </h1>
    <div class="overflow-x-auto mx-5">
        <!-- The button to open modal -->
        <label for="transaction" class="btn">Create data</label>

        
        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="transaction" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Account add</h3>
                <form action="{{ route('transaction.add') }}" method="POST">
                    @csrf
                    <select class="select w-full max-w-xs" name="account_id">
                        <option disabled selected>Account</option>
                        @foreach ($accounts as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">What is your name?</span>
                        </label>
                        <input type="datetime-local" name="transaction_date" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">description</span>
                        </label>
                        <input type="text" name="description" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" />
                    </div>

                    <select class="select w-full max-w-xs my-2" name="debit_credit">
                        <option disabled selected>Credit or Debit</option>
                        <option value="C">Credit</option>
                        <option value="D">Debit</option>
                      </select>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">ammount?</span>
                        </label>
                        <input type="text" name="ammount" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" />
                    </div>

                    
                    <div class="modal-action">
                        <button for="transaction" class="btn">Save</button>
                    </div>
                </form>

            </div>
        </div>
        <label for="reportBuku" class="btn">Report Cetak Buku</label>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="reportBuku" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Account add</h3>
                <form action="{{ route('transaction.report') }}" method="POST">
                    @csrf
                    <select class="select w-full max-w-xs" name="account_id">
                        <option disabled selected>Account</option>
                        @foreach ($accounts as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>

                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Start Date</span>
                        </label>
                        <input type="date" name="startDate" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">End Date</span>
                        </label>
                        <input type="date" name="endDate" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" />
                    </div>
                    <div class="modal-action">
                        <button for="reportBuku" class="btn">Save</button>
                    </div>
                </form>

            </div>
        </div>
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Account Id</th>
                    <th>Name Account</th>
                    <th>Transaction Date</th>
                    <th>Description</th>
                    <th>Ammount</th>
                    <td>Dapat Point</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($transactions as $account)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $account->account_id }}</td>
                        <td>{{ $account->account->name}}</td>
                        <td>{{ $account->description }}</td>
                        <td>{{ $account->debit_credit == 'Cx`' ? 'C' : 'D' }}</td>
                        <td>{{ $account->ammount }}</td>
                        <td>{{ $account->point}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
