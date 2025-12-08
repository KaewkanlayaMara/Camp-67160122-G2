@extends('Template.default')

@section('content')

<div class="container pt-5 pb-5">

    <h1 class="text-center mb-4" style="color: #9C9EFE;">Workshop #HTML - FORM</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body" style="color: #227850e4;">

                    <form>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-auto">
                                <label for="fname" class="col-form-label">ชื่อ</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="fname" class="form-control" placeholder="กรุณากรอกชื่อของคุณ">
                                <div class="valid-feedback">
                                ถูกต้อง
                                </div>
                                <div class="invalid-feedback">
                                ไม่ได้ระบุชื่อ
                                </div>

                            </div>











                            <div class="col-auto">
                                <label for="lname" class="col-form-label">สกุล</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="lname" class="form-control" placeholder="กรุณากรอกสกุลของคุณ">
                                <div class="valid-feedback">
                                ถูกต้อง
                                </div>
                                <div class="invalid-feedback">
                                ไม่ได้ระบุสกุล
                                </div>
                            </div>
                        </div>







                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <label for="dob" class="col-form-label">วัน/เดือน/ปี</label>
                            </div>
                            <div class="col-auto">
                                <input type="date" id="dob" class="form-control">
                                <div class="valid-feedback">
                                ถูกต้อง
                                </div>
                                <div class="invalid-feedback">
                                ไม่ได้ระบุ วัน/เดือน/ปี 
                                </div>
                            </div>















                            <div class="col-auto">
                                <label for="age" class="col-form-label">อายุ</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="age" class="form-control" placeholder="กรุณากรอกอายุของคุณ">
                                <div class="valid-feedback">
                                ถูกต้อง
                                </div>
                                <div class="invalid-feedback">
                                ไม่ได้ระบุอายุ 
                                </div>
                            </div>
                        </div>







                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-auto">
                                <label class="col-form-label">เพศ</label>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="male">
                                    <label class="form-check-label" for="male">ชาย</label>
                                    
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="female">
                                    <label class="form-check-label" for="female">หญิง</label>
                                    <div class="valid-feedback">
                                ถูกต้อง
                                </div>
                                <div class="invalid-feedback">
                                ไม่ได้ระบุอายุ 
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-auto">
                                <label for="userPhoto" class="col-form-label">รูป</label>
                            </div>
                            <div class="col-auto">
                                <input type="file" class="form-control" id="userPhoto">
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-auto">
                                <label for="userAddress" class="col-form-label">ที่อยู่</label>
                            </div>
                            <div class="col-auto" style="width: 400px;">
                                <textarea class="form-control" id="userAddress"
                                    rows="3">กรุณากรอกที่อยู่ของคุณ</textarea>
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-auto">
                                <label for="favColor" class="col-form-label">สีที่ชอบ</label>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" id="favColor" style="width: 250px;">
                                    <option selected>กรุณาเลือกสีที่ชอบ...</option>
                                    <option value="Pastel Pink" style="background-color: #FFB7B2;">Pastel
                                        Pink(ชมพูพาสเทล)</option>
                                    <option value="Flamingo" style="background-color: #FFDAC1;">Flamingo (ส้มพีช)
                                    </option>
                                    <option value="Melon" style="background-color: #FF9AA2;">Melon (แดงเมล่อน)
                                    </option>
                                    <option value="Salmon" style="background-color: #FFDAC1;">Salmon (สีแซลมอน)
                                    </option>
                                    <option value="Cream" style="background-color: #E2F0CB;">Cream (ครีม)</option>
                                    <option value="Lemon" style="background-color: #FDFD96;">Lemon (เหลืองมะนาว)
                                    </option>
                                    <option value="Apricot" style="background-color: #FFB347;">Apricot (แอปริคอท)
                                    </option>
                                    <option value="Mustard" style="background-color: #FFDB58;">Mustard
                                        (เหลืองมัสตาร์ด)</option>
                                    <option value="Mint" style="background-color: #B5EAD7;">Mint (เขียวมิ้นต์)
                                    </option>
                                    <option value="Tea Green" style="background-color: #D0F0C0;">Tea Green (เขียวชา)
                                    </option>
                                    <option value="Sage" style="background-color: #9C9EFE;">Sage (เขียวหม่น)
                                    </option>
                                    <option value="Lime" style="background-color: #C7F464;">Lime (เขียวมะนาว)
                                    </option>
                                    <option value="Sky Blue" style="background-color: #A0E6FF;">Sky Blue
                                        (ฟ้าท้องฟ้า)</option>
                                    <option value="Baby Blue" style="background-color: #89CFF0;">Baby Blue
                                        (ฟ้าเด็กน้อย)</option>
                                    <option value="Periwinkle" style="background-color: #CCCCFF;">Periwinkle
                                        (ฟ้าอมม่วง)</option>
                                    <option value="Steel Blue" style="background-color: #4682B4; color: white;">
                                        SteelBlue (ฟ้าน้ำทะเล)</option>
                                    <option value="Lavender" style="background-color: #E6E6FA;">Lavender
                                        (ลาเวนเดอร์)</option>
                                    <option value="Lilac" style="background-color: #C8A2C8;">Lilac (ม่วงไลแลค)
                                    </option>
                                    <option value="Mauve" style="background-color: #E0BBE4;">Mauve (ม่วงกะปิ)
                                    </option>
                                    <option value="Plum" style="background-color: #DDA0DD;">Plum (ลูกพลัม)</option>
                                    <option value="Beige" style="background-color: #F5F5DC;">Beige (เบจ)</option>
                                    <option value="Grey" style="background-color: #D3D3D3;">Light Grey (เทาอ่อน)
                                    </option>
                                    <option value="Chocolate" style="background-color: #D2691E; color: white;">
                                        Chocolate(ช็อกโกแลต)</option>
                                    <option value="White Smoke" style="background-color: #F5F5F5;">White Smoke
                                        (ควันขาว)</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-auto">
                                <label class="col-form-label">แนวเพลงที่ชอบ</label>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre1">
                                    <label class="form-check-label" for="genre1">เพลงเพื่อเธอ</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre2">
                                    <label class="form-check-label" for="genre2">เพลงจมกับคนเก่า</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre3">
                                    <label class="form-check-label" for="genre3">เพลงแรปเทสดีไปรักเธอ</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre4">
                                    <label class="form-check-label" for="genre4">อื่นๆ</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkIndeterminate">
                                    <label class="form-check-label" for="checkIndeterminate">
                                        ยินยอมให้เก็บข้อมูล
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <div class="col-auto">
                                <button type="reset" class="btn btn-secondary px-5 py-2">RESET</button>
                               <button type="button" onclick="chackValidate()" class="btn btn-primary px-5 py-2">SUBMIT</button>
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

    const shapes = [
        '🦍💨', '🔥👄🔥', '👁️💧👄💧👁️', '🗿'
    ];

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

</body>

</html>
@endsection














@push("scripts")
        <script>
            console.log("it'd work !")
            chackValidate = () => {
                let fname = document.getElementById('fname')
                
                if(fname.value == ""){
                    fname.classList.remove("is-valid")
                    fname.classList.add("is-invalid")

                } else {
                    fname.classList.remove("is-invalid")
                    fname.classList.add("is-valid")
                }

                let lname = document.getElementById('lname')
                if(lname.value == ""){
                    lname.classList.remove("is-valid")
                    lname.classList.add("is-invalid")

                } else {
                    lname.classList.remove("is-invalid")
                    lname.classList.add("is-valid")
                }

                let dob = document.getElementById('dob')
                if(dob.value == ""){
                    dob.classList.remove("is-valid")
                    dob.classList.add("is-invalid")

                } else {
                    dob.classList.remove("is-invalid")
                    dob.classList.add("is-valid")
                }

                let age = document.getElementById('age')
                if(age.value == ""){
                    age.classList.remove("is-valid")
                    age.classList.add("is-invalid")

                } else {
                    age.classList.remove("is-invalid")
                    age.classList.add("is-valid")
                }

                let male = document.getElementById('male')
                let female = document.getElementById('female')
                if(male.value == ""){
                    male.classList.remove("is-valid")
                    male.classList.add("is-invalid")

                } else {
                    male.classList.remove("is-invalid")
                    male.classList.add("is-valid")
                }
                if(female.value == ""){
                    female.classList.remove("is-valid")
                    female.classList.add("is-invalid")

                } else {
                    female.classList.remove("is-invalid")
                    female.classList.add("is-valid")
                }

            }
        </script>
@endpush