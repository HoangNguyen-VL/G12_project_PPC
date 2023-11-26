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
    <title>Thêm</title>
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
                <li> <a href="index.html">View List  Full Contract</li>
            <li> <a href="add.html">Add  Full Contract</a></li>
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
            <h1>Add Full Contract</h1>
            <form action="{{ route('update', ['Contract_ID' => $product->Contract_ID]) }}" method="post">
                @csrf
                <input type="hidden" name="Contract_ID" value="{{ $product->Contract_ID }}">
                <table id="contractForm">

                    <tr>
                    <td>Mã hợp đồng:  <input type="text" id="mahopdong" name="mahopdong" value="{{ $product->Full_Contract_Code }}"></td>
                    <td>Họ tên <input type="text" id="hoten" name="hoten" value="{{ $product->Customer_Name }}"></td>

                    </tr>
                    <tr>
                    <td>Năm sinh:
                        <input type="datetime-local" id="namsinh" name="namsinh" value="{{ $product->Year_of_Birth }}"></td>
                    <td>chứng minh nhân dân:
                        <input type="text" id="cmnd" name="cmnd" value="{{ $product->SSN }}"></td>

                    </tr>
                    <tr>
                    <td>Số điện thoại:
                        <input type="text" id="sodienthoai" name="sdt" value="{{ $product->Mobile }}"></td>
                    <td>Địa chỉ
                        <input type="text" id="diachi" name="diachi" value="{{ $product->Customer_Address }}"></td>

                    </tr>
                    <tr>
                        <td>Mã bất động sản:
                            <select name="mabatdongsan" id="">

                                @foreach ($list_properties as $property)
                                <option value="{{ $property->property_id }}" {{ $property->property_id == $product->property_id ? 'selected' : '' }}>
                                    {{ $property->Property_Name }}
                                </option>
                                @endforeach

                            </select>

                        <td>Ngày lập hợp đồng:
                            <input type="datetime-local" id="ngaplaphopdong" name="ngaylaphopdong" value="{{ $product->Date_of_Contract }}">
                    </tr>
                    <tr>
                        <td>Giá trị hợp đồng:
                            <input type="text" id="giatrihopdong" name="giatrihopdong" value="{{ $product->Price }}">
                        <td>Tiền đã cọc:
                            <input type="number" id="tiendacoc" name="tiendacoc" value="{{ $product->Deposit }}"></td>
                    </tr>
                    <tr>
                        <td>Tiền còn lại:
                            <input type="number" id="tienconlai" name="tienconlai" value="{{ $product->Remain }}"></td>
                        <td>Trạng thái:
                            <select name="trangthai" id="">
                                <option value="1">Đã thanh toán</option>
                                <option value="2">Chưa thanh toán</option>
                            </select></td>
                    </tr>
                </table>
                <div class="button_add">
                <button id="addButton" style="cursor: pointer;">Update</button>

</div>      </form>
            <button id="backButton" style="cursor: pointer;" >Back</button>
    </div>
    </main>

</body>

</html>
