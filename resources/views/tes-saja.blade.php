<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline text-center">
  Report
  </h1>
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
        </tr>
    </thead>
    <tbody>

        @foreach ($reports as $report)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $report->account_id }}</td>
                <td>{{ $report->account->name}}</td>
                <td>{{ $report->description }}</td>
                <td>{{ $report->debit_credit == 'Cx`' ? 'C' : 'D' }}</td>
                <td>{{ $report->ammount }}</td>
    
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>