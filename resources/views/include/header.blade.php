<div class="search_parent">
    <div class="search_filter collapse">
        <h2>Filters</h2>
        <input type="text" class="form-control" name="keyword" value="" placeholder="Keyword"><br>
        <select name="category" class="form-control">
            <option value=""> Any category </option>
            @foreach ($categories as $category)
                <option value="{{ $category['slug'] ?? '' }}"> {{ $category['name'] }} </option>
            @endforeach
        </select></br>
        <select name="color" class="form-control">
            <option value=""> Any color </option>
            @foreach ($colors as $color)
                <option value="{{ $color['slug'] ?? '' }}"> {{ $color['name'] ?? "??"}} </option>
            @endforeach
        </select></br>
        <select name="size" class="form-control">
            <option value=""> Any size </option>
            @foreach ($sizes as $size)
                <option value="{{ $size['name'] ?? '' }}"> {{ $size['name'] ?? "??"}} </option>
            @endforeach
        </select></br>
        <div class="d-flex flex-row">
            <input type="number" class="form-control w-50" name="min_price" value="" placeholder="Min price">
            <input type="number" class="form-control w-50" name="max_price" value="" placeholder="Max price">
        </div>
        <input type="hidden" name="page_index" value="{{ $page['page_index'] ?? '' }}">
        <button class="btn btn-info adv_search_button"> Search </button>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.search_link').click(function(){
            cleanSearchURL();
            search_form.submit();
        });

        var searchFields = $('.search_filter').find('input, select');
        var searchIndexs = ['keyword','category','page_index','color','size','min_price', 'max_price'];

        $('.adv_search_button').click(function() {
            var data = [],
                fieldName,
                fieldValue,
                filterCode = 0,
                url = "/collection/all",
                index;
            searchFields.each(function(){
                fieldName = $(this).attr("name");
                fieldValue = $(this).val();
                if (fieldValue.trim().length > 0) {
                    index = searchIndexs.indexOf(fieldName);
                    data[index] = fieldValue;
                    filterCode += Math.pow(2, index);
                }
            });

            if (filterCode > 0) {
                url = "/search/"+filterCode+"/"+data.filter(function(i) { return i; }).join("/");
            }
            location.href = url;
        })
    });
</script>.
