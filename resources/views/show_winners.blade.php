<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @php
    use App\Models\TicketWinner;
    $winners = TicketWinner::all();
    @endphp
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Winner ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Match ID
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($winners as $winner)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $winner->account->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{$winner->match_id}}
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>