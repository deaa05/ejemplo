<html lang= "en">
    <body>
        <div class="container text-center">
            <div class="row">
                <br/>
                <form action="{{route('projects.update', $project->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-defaul">Id</span>
                        <input type="text" name="id" id="id" class="form-control" value="{{$proyecto->id}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-defaul">Id</span>
                        <input type="text" name="id" id="id" class="form-control" value="{{$proyecto->id}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group">
                        <span class="input-gropup-text">Descripcion</span>
                        <textarea name="descripcion" id="descripcion" class="from-control" aria-label="With textarea">{{$proyecto->descripcion}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
      