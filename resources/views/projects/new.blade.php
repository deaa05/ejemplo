<html lang= "en">
    <body>
        <div class="container text-center">
            <div class="row">
                <br/>




                <form action="{{route('projects.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-defaul">Titulo</span>
                        <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="title" id="title">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Descripcion</span>
                        <textarea name="descripcion" id="descripcion" class="from-control" aria-label="With textarea"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
      
</html>