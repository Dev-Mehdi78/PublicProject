<!DOCTYPE html>
<html>
<head>
    <title>فیلد چند انتخابی</title>
</head>
<body>
    <h1>فیلد چند انتخابی</h1>
    <input id="selectedValues" name="selectedValues">
    <select multiple id="mySelect">
        <option value="value1">مقدار 1</option>
        <option value="value2">مقدار 2</option>
        <option value="value3">مقدار 3</option>
        <option value="value4">مقدار 4</option>
        <option value="value5">مقدار 5</option>
    </select>
    <button onclick="getSelectedValues()">دریافت مقادیر انتخاب شده</button>

    <script>
        function getSelectedValues() {
            var selectElement = document.getElementById("mySelect");
            var selectedValues1 = document.getElementById("selectedValues");
            var selectedValues=selectedValues1.value;
            selectedValues=JSON.parse(selectedValues);
            for (var i = 0; i < selectElement.options.length; i++) {
                var option = selectElement.options[i];
                if (option.selected) {
                    selectedValues.push(option.value);
                }
            }
            selectedValues1.value=JSON.stringify(selectedValues);
            console.log(selectedValues);
        }
    </script>
</body>
</html>