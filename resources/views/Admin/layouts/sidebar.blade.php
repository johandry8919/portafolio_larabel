<div class="sidebar">
    <div class="sidebar-text d-flex flex-column h-200 justify-content-center ">
        <form action="{{route('post_decricion')}}" method="POST">
            @csrf
            <div class="mb-3">
                <img class="mx-auto d-block w-75  img-fluid rounded-circle mb-5 p-3" src="/img/johandry.png" alt="Image">
            <input type="file" name="imagen">
            <h4 class="font-weight-bold"><input  name="nombre" value="" placeholder="escribe tu nombre" type="text"></h4>
            </div>
            
        <p class="mb-4">
            <textarea name="sideDescricion" id="" cols="30" rows="6">
               
            </textarea>
        </p>
        <div class=" row  mb-5">
            <div class="col-md-12 mb-2">
               <i class="fa fa-facebook-f"></i>
            <input type="text" name="twitter" placeholder="twitter">
            </div>

           <div class="col-md-12 mb-2">
            <i class="fa fa-facebook-f"></i>
            <input type="text" name="facebook" placeholder="facebook">
           </div>

           <div class="col-md-12 mb-2">
            <i class="fa fa-facebook-f"></i>
            
            <input name="LinkedIn" type="text" placeholder="LinkedIn">
           </div>
            
           <div class="col-md-12 mb-2">
            <i class="fa fa-facebook-f"></i>
            
            <input type="text" name="github" placeholder="github">

           </div>
        </div>

        <button class="btn btn-lg btn-block btn-info mt-auto" type="submit">Guarda cambio</button>
        </form>
        
    </div>
    <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
        <i class="fas fa-2x fa-angle-double-right text-info"></i>
    </div>
</div>