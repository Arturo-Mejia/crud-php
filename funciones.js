function eliminar(id)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          
            const http=new XMLHttpRequest();
            const url="eliminar.php?id="+id;
        http.onreadystatechange= function()
        {
        if(this.readyState == 4 && this.status==200)
        {
            console.log(this.responseText);
            Swal.fire(
                'Deleted!',
                'Registro eliminado',
                'success'
              )
        }
         }  

    http.open("GET",url);
    http.send(); 
        }
      })   
} 


function editar(id)
{   
    document.getElementById("id").value=document.getElementById("tid"+id).innerHTML;
    document.getElementById("nombre").value=document.getElementById("tnombre"+id).innerHTML;
    document.getElementById("edad").value=document.getElementById("tedad"+id).innerHTML;
    document.getElementById("salario").value=document.getElementById("tsalario"+id).innerHTML;
}


function actualizar()
{
    const http=new XMLHttpRequest();
    const url=".php?id="+id;
http.onreadystatechange= function()
{
if(this.readyState == 4 && this.status==200)
{
    console.log(this.responseText);
    
}
 }
 
 http.open("GET",url);
 http.send(); 
}


function registrar()
{
    let nom= document.getElementById("nombre").value;
    let edad= document.getElementById("edad").value;
    let salario= document.getElementById("salario").value;

    if(nom==""||edad==""||salario=="")
    {
        alert("Para registrar debe ingresar los datos de nombre, edad y salario");
    } else
    {   
        const http=new XMLHttpRequest();
        const url="registrar.php?nombre="+nom+"&edad="+edad+"&salario="+salario;
    http.onreadystatechange= function()
    {
    if(this.readyState == 4 && this.status==200)
    {
        console.log(this.responseText);
        if(this.responseText=="correcto")
        {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registrado correctamente!',
                showConfirmButton: false,
                timer: 1500
              })
              document.getElementById("nombre").value="";
              document.getElementById("edad").value="";
              document.getElementById("salario").value="";
        }
    }
     } 
     http.open("GET",url);
     http.send(); 

    }
}


function actualizar()
{
    let id=document.getElementById("id").value;
    let nom= document.getElementById("nombre").value;
    let edad= document.getElementById("edad").value;
    let salario= document.getElementById("salario").value;

    if(nom==""||edad==""||salario==""||id=="")
    {
        alert("Para actualizar debe ingresar todos los datos del formulario");
    } else
    {   
        const http=new XMLHttpRequest();
        const url="actualizar.php?id="+id+"&nombre="+nom+"&edad="+edad+"&salario="+salario;
    http.onreadystatechange= function()
    {
    if(this.readyState == 4 && this.status==200)
    {
        console.log(this.responseText);
        if(this.responseText=="correcto")
        {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registro actualizado correctamente!',
                showConfirmButton: false,
                timer: 1500
              })
              document.getElementById("id").value=""; 
              document.getElementById("nombre").value="";
              document.getElementById("edad").value="";
              document.getElementById("salario").value="";
        }
    }
     } 
     http.open("GET",url);
     http.send(); 

    }
}