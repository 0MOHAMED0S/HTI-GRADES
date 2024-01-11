<div>
    <!-- Add student_grade Modal -->
    <div wire:ignore.self class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add"
        aria-hidden="true">
        <div class="modal-dialog" role="document" dir="rtl">
            <div class="modal-content text-right">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title mx-auto" id="exampleModalLabel">Add Student Grades</h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="adddtudent_grades">
                        @csrf
                        <div class="form-group">
                            <label for="name">
                                <h5>الاسم :</h5>
                            </label>
                            <input type="text"  class="form-control" id="Department_Name" wire:model="name2" required>
                            @error('name2')
                                <span class="text-danger">يرجي اختيار قيمه .</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="code">
                                <h5>الكود :</h5>
                            </label>
                            <input type="number" class="form-control" id="Department_Name" wire:model="code2" required>
                            @error('code2')
                                <span class="text-danger"> يرجي اختيار كود أو اختيار كود اخر.</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Programming_basics">
                                <h5> التفعيل :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="active" wire:model="active2" required>
                                    <option hidden>اختيار</option>
                                    <option value="1">مفعل</option>
                                    <option value="0">غير مفعل</option>
                                </select>
                                @error('active2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Programming_basics">
                                <h5>أساسيات برمجه :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Programming_basics"
                                    wire:model="Programming_basics2" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                                @error('Programming_basics2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="computer_programming">
                                <h5>برمجه الحاسب :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="computer_programming"
                                    wire:model="computer_programming2" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                                @error('computer_programming2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Computer_assembly">
                                <h5>تجميع الحاسب :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Computer_assembly"
                                    wire:model="Computer_assembly2" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                                @error('Computer_assembly2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Databases">
                                <h5>قواعد البيانات :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Databases" wire:model="Databases2"
                                    required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                                @error('Databases2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Technical_Support">
                                <h5>دعم فني :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Technical_Support"
                                    wire:model="Technical_Support2" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                                @error('Technical_Support2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Career_guidance">
                                <h5>توجيه مهني :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Career_guidance"
                                    wire:model="Career_guidance2" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                                @error('Career_guidance2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="general_appreciation">
                                <h5>التقدير العام :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="name"
                                    wire:model="general_appreciation2" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                    <option>ناجح بمواد</option>
                                </select>
                                @error('general_appreciation2')
                                    <span class="text-danger">يرجي اختيار قيمه .</span>
                                @enderror
                            </div>
                        </div>
                        <div style="display: flex;margin-top: 12px;gap: 10px;height:43px;margin-bottom: 0;">

                            <button  id="green" type="submit" class="btn">حفظ التغييرات</button>
                            @if (session()->has('success2'))
                                <div style="justify-content: center; display:flex;" class="alert alert-success alert-dismissible fade show" role="alert">
                                    <div class="text-center">
                                        {{ session('success2') }}
                                    </div>
                                </div>
                                <style>
                                    .alert-success {
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        height: 100%;
                                    }
                                </style>
                                <script>
                                    setTimeout(function() {
                                        document.querySelector('.alert-success').remove();
                                    }, 3000);
                                </script>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit student_grade Modal -->
    <div wire:ignore.self class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit"
        aria-hidden="true">
        <div class="modal-dialog" role="document" dir="rtl">
            <div class="modal-content text-right">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title mx-auto" id="exampleModalLabel">edit Student Grades</h5>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update">
                        @csrf
                        <div class="form-group">
                            <label for="name">
                                <h5>الاسم :</h5>
                            </label>
                            <input type="text" class="form-control" id="Department_Name" wire:model="name"
                                required>
                            @error('name')
                                <span class="text-danger">يرجي اختيار قيمه .</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="code">
                                <h5>الكود :</h5>
                            </label>
                            <input type="number" class="form-control" id="Department_Name" wire:model="code"
                                required>
                            @error('code')
                                <span class="text-danger"> يرجي اختيار كود أو اختيار كود اخر.</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Programming_basics">
                                <h5> التفعيل :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="active" wire:model="active"
                                    required>
                                    <option hidden>اختيار</option>
                                    <option value="1">مفعل</option>
                                    <option value="0">غير مفعل</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Programming_basics">
                                <h5>أساسيات برمجه :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Programming_basics"
                                    wire:model="Programming_basics" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="computer_programming">
                                <h5>برمجه الحاسب :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="computer_programming"
                                    wire:model="computer_programming" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Computer_assembly">
                                <h5>تجميع الحاسب :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Computer_assembly"
                                    wire:model="Computer_assembly" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Databases">
                                <h5>قواعد البيانات :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Databases" wire:model="Databases"
                                    required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Technical_Support">
                                <h5>دعم فني :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Technical_Support"
                                    wire:model="Technical_Support" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Career_guidance">
                                <h5>توجيه مهني :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="Career_guidance"
                                    wire:model="Career_guidance" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="general_appreciation">
                                <h5>التقدير العام :</h5>
                            </label>
                            <div class="select-wrapper">
                                <select class="form-control custom-select" id="name"
                                    wire:model="general_appreciation" required>
                                    <option hidden>اختيار</option>
                                    <option>أمتياز</option>
                                    <option>جيد جداً</option>
                                    <option>جيد</option>
                                    <option>مقبول</option>
                                    <option>ضعيف</option>
                                    <option>راسب</option>
                                    <option>ناجح بمواد</option>
                                </select>
                            </div>
                        </div>
                        <button style="margin-top: 15px" id="green" type="submit" class="btn btn-success">حفظ التغييرات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal delete studEnt -->
    <div wire:ignore.self class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">DELETE STUDENT </h5>
                    <button type="button" class="close"data-dismiss="modal" aria-hidden="true">X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <form wire:submit.prevent="destroy">
                                    <div class="modal-body">
                                        <h5>Are You Sure You Want To Delete <br> Name: <span
                                                style="color: rgb(255, 166, 0)"> {{ $name3 }} </span>
                                            <br> Code: <span style="color: rgb(255, 166, 0)">{{ $code }}</span>
                                            ?
                                        </h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="green" type="button" class="btn " wire:click="resetFields"
                                            class="close"data-dismiss="modal" aria-hidden="true">cansel
                                        </button>
                                        <button type="submit" class="btn btn-danger">Yes! Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
