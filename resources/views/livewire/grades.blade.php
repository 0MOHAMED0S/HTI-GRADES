<div>
    @include('livewire.model')

    @if (session()->has('success'))
        <div style="margin-top: 10px;" class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="text-center">
                {{ session('success') }}
            </div>
        </div>
        <script>
            setTimeout(function() {
                document.querySelector('.alert-success').remove();
            }, 3000);
        </script>
    @endif

    {{-- admin --}}
    @if (auth('web')->check())
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form wire:submit.prevent="submit2" class="d-flex flex-column align-items-center">
                        <div class="form-group flex-grow-1 mr-2 text-center">
                            <label for="code">Code:</label>
                            <input style="margin-top:15px;" type="number" id="or"
                                class="form-control text-center orange-border" placeholder="Enter code" id="code"
                                wire:model="code">
                        </div>
                        <div style="margin-top:15px;">
                            <button id="green" type="submit" class="btn">Submit</button>
                            <button type="button" id="btn" class="btn " data-toggle="modal" data-target="#add">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        {{-- user --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form wire:submit.prevent="submit" class="d-flex flex-column align-items-center">
                        <div class="form-group flex-grow-1 mr-2 text-center">
                            <label style="margin-top:15px;" for="code">Code:</label>
                            <input type="number" id="or" class="form-control text-center orange-border"
                                placeholder="Enter code" id="code" wire:model="code">
                        </div>
                        <div style="margin-top:15px;">
                            <button id="green" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    {{-- user --}}
    @if ($grades)
        @if ($submitted)
            @if (count($grades) == 0)
                <div style="justify-content: center; display:flex; margin-top:15px" class="alert alert-danger">
                    <h6>. يرجي اعاده كتابه الكود </h6>
                </div>
            @else
                @foreach ($grades as $grade)
                    @if ($grade->active == 0)
                        <div style="justify-content: center; display:flex; margin-top:15px" class="alert alert-warning">
                            <h6>. تم حجب النتيجه </h6>
                        </div>
                    @else
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>

                                                <tr>
                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle ">
                                                            {{ $grade->name }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle  text-white col-sm-2">
                                                        الاسم
                                                    </th>
                                                    <style>
                                                        @media (max-width: 768px) {

                                                            .table-bordered td,
                                                            .table-bordered th {
                                                                border: 1px solid #dee2e6;
                                                                width: 150px;
                                                            }
                                                        }
                                                    </style>
                                                </tr>

                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">{{ $grade->code }}</td>
                                                    @endforeach
                                                    <th class="text-center align-middle  text-white col-sm-2">
                                                        الكود
                                                    </th>
                                                </tr>
                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">
                                                            {{ $grade->Programming_basics }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle text-white col-sm-2">
                                                        اساسيات
                                                        برمجه
                                                    </th>
                                                </tr>
                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">
                                                            {{ $grade->computer_programming }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle text-white col-sm-2">
                                                        برمجه
                                                        الحاسب
                                                    </th>
                                                </tr>
                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">
                                                            {{ $grade->Technical_Support }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle  text-white col-sm-2">
                                                        دعم فني
                                                    </th>
                                                </tr>
                                                <tr>
                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">
                                                            {{ $grade->Career_guidance }}</td>
                                                    @endforeach
                                                    <th class="text-center align-middle text-white col-sm-2">
                                                        توجيه
                                                        مهني</th>

                                                </tr>
                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">
                                                            {{ $grade->Computer_assembly }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle text-white col-sm-2">
                                                        تجميع
                                                        الحاسب
                                                    </th>

                                                </tr>
                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">{{ $grade->Databases }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle text-white col-sm-2">
                                                        قواعد
                                                        بيانات
                                                    </th>
                                                </tr>
                                                <tr>

                                                    @foreach ($grades as $grade)
                                                        <td class="text-center align-middle">
                                                            {{ $grade->general_appreciation }}
                                                        </td>
                                                    @endforeach
                                                    <th class="text-center align-middle text-white col-sm-2">
                                                        التقدير
                                                        العام
                                                    </th>
                                                </tr>

                                    </div>
                    @endif
                @endforeach
                </tbody>
                </table>
</div>
</div>
</div>
@endif
@endif
@endif

{{-- admin --}}
@if ($grades2)
    @if ($submitted)
        @if (count($grades2) == 0)
            <div style="justify-content: center; display:flex; margin-top:15px" class="alert alert-danger">
                <h6>. يرجي اعاده كتابه الكود </h6>
            </div>
        @else
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>

                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle ">
                                                {{ $grade->name }}
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle  text-white col-sm-2">الاسم
                                        </th>
                                        <style>
                                            @media (max-width: 768px) {

                                                td.text-center.align-middle {
                                                    width: 150px;
                                                }
                                            }
                                        </style>
                                    </tr>

                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->code }}</td>
                                        @endforeach
                                        <th class="text-center align-middle  text-white col-sm-2">الكود
                                        </th>
                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">
                                                @if ($grade->active == 1)
                                                    <h6>
                                                        مفعل <span class="circle-animation"></span>
                                                    </h6>
                                                @else
                                                    <h6>غير
                                                        مفعل <span class="circle-animation2"></span>
                                                    </h6>
                                                @endif
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">التفعيل
                                        </th>
                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->Programming_basics }}
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">اساسيات
                                            برمجه
                                        </th>
                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->computer_programming }}
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">برمجه
                                            الحاسب
                                        </th>
                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->Technical_Support }}
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">دعم فني
                                        </th>
                                    </tr>
                                    <tr>
                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->Career_guidance }}</td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">توجيه
                                            مهني</th>

                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->Computer_assembly }}
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">تجميع
                                            الحاسب
                                        </th>

                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->Databases }}</td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">قواعد
                                            بيانات
                                        </th>
                                    </tr>
                                    <tr>

                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle">{{ $grade->general_appreciation }}
                                            </td>
                                        @endforeach
                                        <th class="text-center align-middle text-white col-sm-2">التقدير
                                            العام
                                        </th>
                                    </tr>

                                    <tr>
                                        @foreach ($grades2 as $grade)
                                            <td class="text-center align-middle d-flex justify-content-center">
                                                <li style="list-style: none;    align-items: center;display: flex;"
                                                    class="nav-item dropdown">
                                                    <a id="a" style="color: rgb(231, 89, 17);;"
                                                        class="nav-link dropdown-toggle" href="#"
                                                        id="navbarDropdown" role="button" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        setting
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                        <a id="a"
                                                            style="width:50px;justify-content: center;
                                                            margin-left: 15px;display:flex; width: 50px;text-decoration-line: none;"
                                                            href="#">
                                                            <button
                                                                style="color:rgb(231, 89, 17); text-decoration-line: none;"
                                                                type="button" data-toggle="modal"
                                                                wire:click.prevent="edit({{ $grade->id }})"
                                                                data-toggle="modal" data-target="#edit"
                                                                class="btn btn-link btn-sm">
                                                                edit
                                                            </button>
                                                        </a>


                                                        <a
                                                            style="width:50px;justify-content: center;
                                                            margin-left: 15px;display:flex;list-style: none; width: 50px;text-decoration-line: none;">
                                                            <button
                                                                style="color:rgb(231, 89, 17);    text-decoration-line: none;"
                                                                wire:click="delete({{ $grade->id }})"
                                                                type="button" data-toggle="modal"
                                                                data-target="#delete" class="btn btn-link btn-sm">
                                                                Delete
                                                            </button>
                                                        </a>
                                                    </div>
                                                </li>
                        </div>
                        </td>
        @endforeach
        <th class="text-center align-middle text-white col-sm-2">operation
        </th>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
    @endif
@endif
</div>
@endif
</div>
