function loadRangeDateSetInputHidden(start, end) {
    var dateRangeInput = document.querySelector('input[name="dateRange"]');
    var objDates = {
        start: start,
        end: end,
    };

    dateRangeInput.value = JSON.stringify(objDates);
    //Notifica o livewire que eu atualizei os valores do input dateRange
    var event = new Event("input", { bubbles: true });
    dateRangeInput.dispatchEvent(event);
}

addEventListener("load", function () {
    //var inputRangeDate = $("input[name=range_date]");
    var inputRangeDateSearchBar = $("input[name=search-bar]");

    /*inputRangeDate.daterangepicker({
        autoApply: true,
        autoUpdateInput: false,
        minDate: moment(),
        locale: {
            cancelLabel: "Clear",
        },
        locale: {
            format: "DD/MM/YYYY", // Formato de data em pt-BR
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "De",
            toLabel: "Até",
            customRangeLabel: "Intervalo personalizado",
            daysOfWeek: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
            monthNames: [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro",
            ],
        },
        showCustomRangeLabel: false,
    });*/

    inputRangeDateSearchBar.daterangepicker({
        autoApply: true,
        autoUpdateInput: false,
        locale: {
            cancelLabel: "Clear",
        },
        locale: {
            format: "DD/MM/YYYY", // Formato de data em pt-BR
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "De",
            toLabel: "Até",
            customRangeLabel: "Intervalo personalizado",
            daysOfWeek: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
            monthNames: [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro",
            ],
        },
        showCustomRangeLabel: false,
    });

    //inputRangeDate.on("apply.daterangepicker", function (ev, picker) {
    //    $(this).val(
    //        picker.startDate.format("DD/MM/YYYY") +
    //            " - " +
    //            picker.endDate.format("DD/MM/YYYY")
    //    );
    //});
    //
    //inputRangeDate.on("cancel.daterangepicker", function (ev, picker) {
    //    $(this).val("");
    //});

    inputRangeDateSearchBar.on("apply.daterangepicker", function (ev, picker) {
        $(this).val(
            picker.startDate.format("DD/MM/YYYY") +
            " - " +
            picker.endDate.format("DD/MM/YYYY")
        );
    });

    inputRangeDateSearchBar.on("cancel.daterangepicker", function (ev, picker) {
        $(this).val("");
    });

    // Função para chamar loadRangeDateSetInputHidden quando houver uma alteração
    function onChangeDateRange() {
        var selectedDates = inputRangeDate.val();
        if (selectedDates) {
            var dates = selectedDates.split(" - ");
            var startDate = dates[0];
            var endDate = dates[1];
            loadRangeDateSetInputHidden(startDate, endDate);
        }
    }

    // Evento para a primeira seleção
    //inputRangeDate.on("apply.daterangepicker", function (ev, picker) {
    //    var startDate = picker.startDate.format("YYYY-MM-DD");
    //    var endDate = picker.endDate.format("YYYY-MM-DD");
    //    loadRangeDateSetInputHidden(startDate, endDate);
    //});

    // Evento para detectar alterações subsequentes
    //inputRangeDate.on("change", onChangeDateRange);

    $("input[name=zip_code]").mask("00000-000");
    $("input[name=phone_number]").mask("(00)00000-0000");
    $("input[name=search-bar]").mask("##/##/#### - ##/##/####");
    $("input[name=range_date]").mask("##/##/#### - ##/##/####");

});
