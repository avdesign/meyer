<!-- categories/filters/filter-2 -->
<div class="product-filter filters-panel">
    <div class="row">
        <div class="box-list col-md-2 hidden-sm hidden-xs">
            <div class="view-mode">
                <div class="list-view">
                    <button class="btn btn-default grid active" data-toggle="tooltip" title="Grade"><i class="fa fa-th-large"></i></button>
                    <button class="btn btn-default list " data-toggle="tooltip" title="Lista"><i class="fa fa-bars"></i></button>
                </div>
            </div>
        </div>
        <div class="short-by-show form-inline text-right col-md-10 col-sm-12">

            <div class="form-group short-by">
                <label class="control-label" for="input-sort">Ordenar por:</label>
                <select id="input-sort" class="form-control" onchange="location = this.value;">
                    <option value="{{url("categoria/$id")}}" selected="selected">Padrão</option>
                    <option value="{{url("categoria/$id")}}">Outros</option>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label" for="input-limit">Mostrar:</label>
                <select id="input-limit" class="form-control" onchange="location = this.value;">
                    <option value="{{url("categoria/$id")}}" selected="selected">12</option>
                    <option value="{{url("categoria/$id")}}">25</option>
                    <option value="{{url("categoria/$id")}}">50</option>
                    <option value="{{url("categoria/$id")}}">75</option>
                    <option value="{{url("categoria/$id")}}">100</option>
                </select>
            </div>

            <div class="product-compare form-group" style="margin: 0 10px"><a href="#" id="compare-total" class="btn btn-default"><i class="fa fa-refresh"></i> Compare</a></div>

        </div>

    </div>
</div>
<!-- //end categories/filters/filter-2 -->
