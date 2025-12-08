@extends('Template.default')

@section('content')
<h1>this is my view 2</h1>
<input type = "text" id = "input" value = "input text"/>
<button onclick = "myfunc()" on> ตรวจสอบ 1  </button>
<button onclick = "myfunc2()" on> ตรวจสอบ 2  </button>
<button onclick = "myfunc3()" on> ตรวจสอบ 3  </button>
@endsection

@push('scripts')
<h1> my view 2</h1>
@endpush

@push('scripts')
<h1> my view 2</h1>
@endpush

@push('scripts')
 <script>
    myvar = 1 ;
    let myvar2
    console.log(myvar)
    console.log(myvar2)
    </script>


    <script>
   
    myvar2 = "gggg "
    console.log(myvar,myvar2)

    </script>


<script>
   console.log(document.getElementId('input'))
   console.log(input); 
   function myfunc(){
    console.log(doc);
    console.log("myfunc called");
   }
   let myfunc2 = function(){
    console.log("myfunc2 called");
   }
   myfunc3 = () => console.log("myfunc3 called");
   function myfunc4(callback){
    console.log("myfunc4 called");
    callback()
   }
   myfunc4(myfunc3)

   














   

    </script>
@endpush