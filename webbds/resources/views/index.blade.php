<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Fonts Pre Connect -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts Links (Roboto 400, 500 and 700 included) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

    <!-- CSS Files Links -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Title -->
    <title>Quản lý bất động sản</title>
</head>
<body>
    <div class="container">
        <header>
            <ul>
                <li>
                    <div class="logo">
                        <a href="#"><img src="{{ asset('img/logo.jpg') }}" alt=""></a>
                    </div>
                </li>
                <li>
                    <div class="text">
                        <h2>GROUP 12</h2>
                        <BR>
                        <h4>PPC Real Estate</h4>
                </li>
                <li>
                    <h3>Manage Property</h3>
                </li>
                <li>
                    <h3>Manage Full Contract</h3>
                </li>
            </ul>
            </div>
    </div>
    </header>
    <nav>
        <div class="menu">
            <ul>
                <!-- Trong phần menu -->
                <li><a href="{{ route('home') }}">View List Full Contract</a></li>
                <li><a href="{{ route('viewAdd') }}">Add Full Contract</a></li>

            </ul>
        </div>
        <div class="search">
            <input type="search">
            <button>Search</button>
        </div>
    </nav>

    <div class="slide">
        <a hreff=""><img src="{{ asset('img/bg.jpg') }}" alt=""></a>

        <main>
            <h1 style="padding: 10px;">View List Full Contract</h1>
            <div class="list">
                <div class="contract-header">
                    <table>
                        <thead>
                            <tr>
                                <th>Contract Code</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Property Code</th>
                                <th>Property Value</th>
                                <th>Status</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key)
                            <tr>
                                <td>{{ $key->Full_Contract_Code }}</td>
                                <td>{{ $key->Customer_Name }}</td>
                                <td>{{ $key->Mobile }}</td>
                                <td>{{ $key->property->Property_Code }}</td>
                                <td>{{ $key->Price }}</td>
                                <td>@if ($key->Status==1)
                                        Đã hoàn thành
                                @else
                                    Chưa hoàn thành
                                @endif</td>
                                <td><form action="{{ route('delete') }}" method="POST">
                                    <a href="{{ route('edit',$key->Contract_ID) }}" class="btn btn-warning">Sửa</a>
                                    @csrf
                                    <div class="xoa" >
                                        <input type="hidden" name="Contract_ID" value="{{ $key->Contract_ID }}">
                                        <button class="btn btn-danger" style="cursor: pointer">xóa</button>
                                    </div>
                                </form></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div id="contractList" class="contract-list">

                </div>

            </div>
        </main>
    </div>
</body>

</html>
