(function ($) {
  $(document).ready(function () {


    $("#post-index-tables").DataTable({


      order: [[3, "desc"]],
      scrollCollapse: true,

      searchable: true,
      pageLength: 10,
      responsive: true,
      lengthMenu: [10, 20, 50, 100],
      autoWidth: false,
      layout: {
        topEnd: {
          search: {
            placeholder: "Search here...",
          },
        },
      },
    });


    $("#job-index-tables").DataTable({


      order: [[3, "desc"]],
      scrollCollapse: true,

      searchable: true,
      pageLength: 10,
      responsive: true,
      lengthMenu: [10, 20, 50, 100],
      autoWidth: false,
      layout: {
        topEnd: {
          search: {
            placeholder: "Search here...",
          },
        },
      },
    });

    $("#referal-index-tables").DataTable({

      

      order: [[0, "asc"]],
      scrollCollapse: true,

      searchable: true,
      pageLength: 10,
      responsive: true,
      lengthMenu: [10, 20, 50, 100],
      autoWidth: false,
      layout: {
        topEnd: {
          search: {
            placeholder: "Search here...",
          },
        },
      },
    });

    $("#companyUser-index-tables").DataTable({

      

      order: [[2, "desc"]],
      scrollCollapse: true,

      searchable: true,
      pageLength: 10,
      responsive: true,
      lengthMenu: [10, 20, 50, 100],
      autoWidth: false,
      layout: {
        topEnd: {
          search: {
            placeholder: "Search here...",
          },
        },
      },
    });


    $("#companyMachine-index-tables").DataTable({

      

      order: [[2, "desc"]],
      scrollCollapse: true,

      searchable: true,
      pageLength: 10,
      responsive: true,
      lengthMenu: [10, 20, 50, 100],
      autoWidth: false,
      layout: {
        topEnd: {
          search: {
            placeholder: "Search here...",
          },
        },
      },
    });


    $("#slider-index-tables").DataTable({

      

      order: [[1, "desc"]],
      scrollCollapse: true,

      searchable: true,
      pageLength: 10,
      responsive: true,
      lengthMenu: [10, 20, 50, 100],
      autoWidth: false,
      layout: {
        topEnd: {
          search: {
            placeholder: "Search here...",
          },
        },
      },
    });

    



    






    





    //show hide column end here
    //seach API regular expression start
    function filterGlobal() {
      $("#search-api-datatable").DataTable().search($("#g-filter").val(), $("#global_regex").prop("checked"), $("#global_smart").prop("checked")).draw();
    }
    function filterColumn(i) {
      $("#search-api-datatable")
        .DataTable()
        .column(i)
        .search($("#col" + i + "_filter").val(), $("#col" + i + "_regex").prop("checked"), $("#col" + i + "_smart").prop("checked"))
        .draw();
    }
    $("input.g-filter").on("keyup click", function () {
      filterGlobal();
    });
    $("input.column_filter").on("keyup click", function () {
      filterColumn($(this).parents("tr").attr("data-column"));
    });





    $.fn.dataTable.ext.order["dom-text"] = function (settings, col) {
      return this.api()
        .column(col, {
          order: "index",
        })
        .nodes()
        .map(function (td, i) {
          return $("input", td).val();
        });
    };
    $.fn.dataTable.ext.order["dom-text-numeric"] = function (settings, col) {
      return this.api()
        .column(col, {
          order: "index",
        })
        .nodes()
        .map(function (td, i) {
          return $("input", td).val() * 1;
        });
    };
    $.fn.dataTable.ext.order["dom-select"] = function (settings, col) {
      return this.api()
        .column(col, {
          order: "index",
        })
        .nodes()
        .map(function (td, i) {
          return $("select", td).val();
        });
    };
    $.fn.dataTable.ext.order["dom-checkbox"] = function (settings, col) {
      return this.api()
        .column(col, {
          order: "index",
        })
        .nodes()
        .map(function (td, i) {
          return $("input", td).prop("checked") ? "1" : "0";
        });
    };
    $(document).ready(function () {
      $("#datatable-livedom").DataTable({
        columns: [
          null,
          {
            orderDataType: "dom-text-numeric",
          },
          {
            orderDataType: "dom-text",
            type: "string",
          },
          {
            orderDataType: "dom-select",
          },
        ],
      });
    });
    //datatable dom ordering end here
    // Remove `btn-secondary` class dynamically
    $(".dt-buttons .btn").removeClass("btn-secondary");
  });
})(jQuery);
