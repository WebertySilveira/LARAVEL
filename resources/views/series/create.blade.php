@extends('layout')

@section('content')
    <div class="px-4 pt-5 my-5 border-bottom">
        <h1 class="display-4 fw-bold text-center">Adicionar Série</h1>
        <div class="col-xxl-8 px-4 py-5">
            <form 
                method="POST" 
                class="row row-cols-lg-auto g-3 align-items-center d-flex justify-content-center"
            >
            @csrf
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Série</label>
                    <div class="input-group">
                    <input type="text" name="serie" class="form-control" id="inlineFormInputGroupUsername" placeholder="Série">
                    </div>
                </div>

                <div class="col-6">
                    <select class="form-select" id="inlineFormSelectPref" name="rank">
                        <option selected>Nota</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-6">
                    <input type="number" name="seasons" class="form-control" placeholder="Temporadas">
                </div>

                <div class="col-6">
                    <input type="number" names="episodes" class="form-control" placeholder="Episódios">
                </div>

                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
@endsection