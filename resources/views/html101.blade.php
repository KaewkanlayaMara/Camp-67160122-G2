@extends('Template.default')

@section('content')
    <div class="container pt-5 pb-5">
        <h1 class="text-center mb-4" style="color: #9C9EFE;">Workshop #HTML - FORM</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body" style="color: #227850e4;">

                        <form action="/user" method = "POST">
                            @csrf
                            <div class="row mb-3 justify-content-center">
                                <div class="col-auto">
                                    <label for="fname" class="col-form-label">ชื่อ</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="fname" name="fname" class="form-control"
                                        placeholder="กรุณากรอกชื่อของคุณ" onkeyup="checkValidate()">
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">ไม่ได้ระบุชื่อ</div>
                                </div>

                                <div class="col-auto">
                                    <label for="lname" class="col-form-label">สกุล</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="lname" name="lname" class="form-control"
                                        placeholder="กรุณากรอกสกุลของคุณ" onkeyup="checkValidate()">
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">ไม่ได้ระบุสกุล</div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-auto">
                                    <label for="date" class="col-form-label">วัน/เดือน/ปี</label>
                                </div>
                                <div class="col-auto">
                                    <input type="date" id="date" name="date" class="form-control"
                                        onchange="checkValidate()">
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">ไม่ได้ระบุ วัน/เดือน/ปี</div>
                                </div>

                                <div class="col-auto">
                                    <label for="age" class="col-form-label">อายุ</label>
                                </div>
                                <div class="col-auto">
                                    <input type="number" id="age" name="age" class="form-control"
                                        placeholder="กรุณากรอกอายุของคุณ" onkeyup="checkValidate()"
                                        onchange="checkValidate()">
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">ไม่ได้ระบุอายุ</div>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">เพศ</label>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="male" name="sex"
                                            id="male" onchange="checkValidate()">
                                        <label class="form-check-label" for="male">ชาย</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" value="female"
                                            id="female" onchange="checkValidate()">
                                        <label class="form-check-label" for="female">หญิง</label>
                                        <div class="valid-feedback">ถูกต้อง</div>
                                        <div class="invalid-feedback">กรุณาระบุเพศ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center align-items-center">
                                <div class="col-auto">
                                    <label for="userPhoto" class="col-form-label">รูป</label>
                                </div>
                                <div class="col-auto">
                                    <input type="file" class="form-control" id="userPhoto" name="userPhoto"
                                        onchange="checkValidate()">
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">กรุณาใส่รูป</div>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center align-items-center">
                                <div class="col-auto">
                                    <label for="userAddress" class="col-form-label">ที่อยู่</label>
                                </div>
                                <div class="col-auto" style="width: 400px;">
                                    <textarea class="form-control" id="userAddress" rows="3" name="userAddress"
                                        placeholder="กรุณากรอกที่อยู่ของคุณ" onkeyup="checkValidate()"></textarea>
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">กรุณากรอกที่อยู่ของคุณ</div>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center align-items-center">
                                <div class="col-auto">
                                    <label for="favColor" class="col-form-label">สีที่ชอบ</label>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" id="favColor" name="favColor" style="width: 250px;"
                                        onchange="checkValidate()">
                                        <option value="" selected>กรุณาเลือกสีที่ชอบ...</option>

                                        <option value="Red" style="background-color: #FFB7B2;">Red (สีแดง)</option>
                                        <option value="Green" style="background-color: #B5EAD7;">Green (สีเขียว)</option>
                                        <option value="Blue" style="background-color: #A0E6FF;">Blue (สีฟ้า/น้ำเงิน)
                                        </option>
                                        <option value="Yellow" style="background-color: #FDFD96;">Yellow (สีเหลือง)
                                        </option>
                                        <option value="Purple" style="background-color: #E0BBE4;">Purple (สีม่วง)</option>

                                    </select>
                                    <div class="valid-feedback">ถูกต้อง</div>
                                    <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ</div>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">แนวเพลงที่ชอบ</label>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="genre1"
                                            onchange="checkValidate()" value="life">
                                        <label class="form-check-label" for="genre1">เพลงเพื่อเธอ</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="genre2"
                                            onchange="checkValidate()" value="brokenheart">
                                        <label class="form-check-label" for="genre2">เพลงจมกับคนเก่า</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="genre3"
                                            onchange="checkValidate()" value="rap">
                                        <label class="form-check-label" for="genre3">เพลงแรปเทสดีไปรักเธอ</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genre" id="genre4"
                                            onchange="checkValidate()" value="other">
                                        <label class="form-check-label" for="genre4">อื่นๆ</label>
                                        <div class="valid-feedback">เลือกแนวเพลงเรียบร้อย</div>
                                        <div class="invalid-feedback">กรุณาเลือกแนวเพลงอย่างน้อย 1 อย่าง</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 justify-content-center align-items-center">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="consent"
                                            id="checkIndeterminate" onchange="checkValidate()">
                                        <label class="form-check-label" for="checkIndeterminate">
                                            ยินยอมให้เก็บข้อมูล
                                        </label>
                                        <div class="valid-feedback">ขอบคุณที่ให้ข้อมูล</div>
                                        <div class="invalid-feedback">กรุณากดยินยอมก่อนยืนยัน</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-3 mt-3">
                                <div class="col-auto">
                                    <button type="reset" class="btn btn-secondary px-5 py-2">RESET</button>
                                    <button type="submit" onclick="checkValidate()"
                                        class="btn btn-primary px-5 py-2">SUBMIT</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function createFallingItem() {
            const item = document.createElement('div');
            item.classList.add('falling-item');

            const shapes = ['🦍💨', '🔥👄🔥', '👁️💧👄💧👁️', '🗿'];
            item.innerHTML = shapes[Math.floor(Math.random() * shapes.length)];
            item.style.left = Math.random() * 100 + 'vw';

            const duration = Math.random() * 3 + 2;
            item.style.animationDuration = duration + 's';
            item.style.fontSize = (Math.random() * 20 + 20) + 'px';

            document.body.appendChild(item);
            setTimeout(() => {
                item.remove();
            }, duration * 1000);
        }
        setInterval(createFallingItem, 2500);
    </script>
@endsection

@push('scripts')
    <script>
        const checkValidate = () => {
            let fname = document.getElementById('fname');
            if (fname.value.trim() == "") {
                fname.classList.remove("is-valid");
                fname.classList.add("is-invalid");
            } else {
                fname.classList.remove("is-invalid");
                fname.classList.add("is-valid");
            }

            let lname = document.getElementById('lname');
            if (lname.value.trim() == "") {
                lname.classList.remove("is-valid");
                lname.classList.add("is-invalid");
            } else {
                lname.classList.remove("is-invalid");
                lname.classList.add("is-valid");
            }

            let date = document.getElementById('date');
            if (date.value == "") {
                date.classList.remove("is-valid");
                date.classList.add("is-invalid");
            } else {
                date.classList.remove("is-invalid");
                date.classList.add("is-valid");
            }

            let age = document.getElementById('age');
            if (age.value == "") {
                age.classList.remove("is-valid");
                age.classList.add("is-invalid");
            } else {
                age.classList.remove("is-invalid");
                age.classList.add("is-valid");
            }

            let male = document.getElementById('male');
            let female = document.getElementById('female');
            if (male.checked == false && female.checked == false) {
                male.classList.remove("is-valid");
                male.classList.add("is-invalid");
                female.classList.remove("is-valid");
                female.classList.add("is-invalid");
            } else {
                male.classList.remove("is-invalid");
                male.classList.add("is-valid");
                female.classList.remove("is-invalid");
                female.classList.add("is-valid");
            }

            let userPhoto = document.getElementById('userPhoto');
            if (userPhoto.value == "") {
                userPhoto.classList.remove("is-valid");
                userPhoto.classList.add("is-invalid");
            } else {
                userPhoto.classList.remove("is-invalid");
                userPhoto.classList.add("is-valid");
            }

            let userAddress = document.getElementById('userAddress');
            if (userAddress.value.trim() == "") {
                userAddress.classList.remove("is-valid");
                userAddress.classList.add("is-invalid");
            } else {
                userAddress.classList.remove("is-invalid");
                userAddress.classList.add("is-valid");
            }

            let favColor = document.getElementById('favColor');
            if (favColor.value == "") {
                favColor.classList.remove("is-valid");
                favColor.classList.add("is-invalid");
            } else {
                favColor.classList.remove("is-invalid");
                favColor.classList.add("is-valid");
            }

            let g1 = document.getElementById('genre1');
            let g2 = document.getElementById('genre2');
            let g3 = document.getElementById('genre3');
            let g4 = document.getElementById('genre4');

            if (!g1.checked && !g2.checked && !g3.checked && !g4.checked) {
                g1.classList.remove("is-valid");
                g1.classList.add("is-invalid");
                g2.classList.remove("is-valid");
                g2.classList.add("is-invalid");
                g3.classList.remove("is-valid");
                g3.classList.add("is-invalid");
                g4.classList.remove("is-valid");
                g4.classList.add("is-invalid");
            } else {
                g1.classList.remove("is-invalid");
                g1.classList.add("is-valid");
                g2.classList.remove("is-invalid");
                g2.classList.add("is-valid");
                g3.classList.remove("is-invalid");
                g3.classList.add("is-valid");
                g4.classList.remove("is-invalid");
                g4.classList.add("is-valid");
            }

            let check = document.getElementById('checkIndeterminate');
            if (check.checked == false) {
                check.classList.remove("is-valid");
                check.classList.add("is-invalid");
            } else {
                check.classList.remove("is-invalid");
                check.classList.add("is-valid");
            }
        }
    </script>
@endpush
