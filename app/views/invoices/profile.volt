<style>
    .table{
        display: block;
        overflow-x: auto;
    }
    a.export,
    a.export:visited {
    display: inline-block;
    text-decoration: none;
    color: #000;
    background-color: #ddd;
    border: 1px solid #ccc;
    padding: 8px;
    }
</style>
{{ content() }}
<h2>Resultados</h2>
<a href="#" id="export" class="btn btn-success btn-sm">Exportar para csv</a>
<div id="dados">
<table id="table" class="table-bordered table-striped table">
    <thead>
        <tr>
            <td>Nome</td>
            <td>q1</td>
            <td>q2</td>
            <td>q2_1</td>
            <td>q3</td>
            <td>q4</td>
            <td>q5</td>
            <td>q6</td>
            <td>q6_1</td>
            <td>q7</td>
            <td>q8</td>
            <td>q9</td>
            <td>q9_1</td>
            <td>q10</td>
            <td>q11</td>
            <td>q11_1</td>
            <td>q12</td>
            <td>q13</td>
            <td>q14</td>
            <td>q15</td>
            <td>q16</td>
            <td>q17</td>
            <td>q18</td>
            <td>q19</td>
            <td>q20</td>
            <td>q21</td>
            <td>q22</td>
            <td>q23</td>
            <td>q24</td>
            <td>q25</td>
            <td>q26</td>
            <td>q27</td>
            <td>q28</td>
            <td>q29</td>
            <td>q30</td>

            <td>q1</td>
            <td>q2</td>
            <td>q3</td>
            <td>q4</td>
            <td>q5</td>
            <td>q6</td>
            <td>q7_1</td>
            <td>q7_2</td>
            <td>q7_3</td>
            <td>q7_4</td>
            <td>q7_5</td>
            <td>q7_6</td>
            <td>q8</td>
            <td>q9</td>
            <td>q10</td>
            <td>q11</td>
            <td>q12</td>
            
            <td>q13</td>
            <td>q14</td>
            <td>q15</td>
            <td>q16</td>
            <td>q17</td>
            <td>q18</td>
            <td>q19</td>
            <td>q20</td>
            <td>q20_1</td>
            <td>q21</td>

            <td>q22</td>
            <td>q23</td>
            <td>q24</td>
            <td>q25</td>
            <td>q26</td>
            <td>q26_1</td>
            <td>q27</td>
            <td>q28</td>
            <td>q29</td>
            <td>q30</td>
            <td>q31</td>
            <td>q32</td>

            <td>q1</td>
            <td>q2</td>
            <td>q3</td>
            <td>q4</td>
            <td>q5</td>
            <td>q6</td>
            <td>q7</td>
            <td>q8</td>
            <td>q9</td>
            <td>q10</td>
            <td>q10_1</td>

            <td>q11</td>
            <td>q12</td>
            <td>q13</td>
            <td>q14</td>
            <td>q15</td>
            <td>q16</td>
            <td>q17</td>
            <td>q17_1</td>
            <td>q18</td>
            <td>q20</td>
            <td>q21</td>
            <td>q21_1</td>

            <td>q22</td>
            <td>q23</td>
            <td>q24</td>
            <td>q25</td>
            <td>q26</td>
            <td>q27</td>
            <td>q28</td>
            <td>q29</td>
            <td>q30</td>
        </tr>
    </thead>
    <tbody id="list">
      {% for guest in guests %}
        <tr>
            <td>{{ guest.name }}</td>
            <td>{{ guest.oceans.q1 }}</td>
            <td>{{ guest.oceans.q2 }}</td>
            <td>{{ guest.oceans.q2_1 }}</td>
            <td>{{ guest.oceans.q3 }}</td>
            <td>{{ guest.oceans.q4 }}</td>
            <td>{{ guest.oceans.q5 }}</td>
            <td>{{ guest.oceans.q6 }}</td>
            <td>{{ guest.oceans.q6_1 }}</td>
            <td>{{ guest.oceans.q7 }}</td>
            <td>{{ guest.oceans.q8 }}</td>
            <td>{{ guest.oceans.q9 }}</td>
            <td>{{ guest.oceans.q9_1 }}</td>
            <td>{{ guest.oceans.q10 }}</td>
            <td>{{ guest.oceans.q11 }}</td>
            <td>{{ guest.oceans.q11_1 }}</td>
            <td>{{ guest.oceans.q12 }}</td>
            <td>{{ guest.oceans.q13 }}</td>
            <td>{{ guest.oceans.q14 }}</td>
            <td>{{ guest.oceans.q15 }}</td>
            <td>{{ guest.oceans.q16 }}</td>
            <td>{{ guest.oceans.q17 }}</td>
            <td>{{ guest.oceans.q18 }}</td>
            <td>{{ guest.oceansSecond.q19 }}</td>
            <td>{{ guest.oceansSecond.q20 }}</td>
            <td>{{ guest.oceansSecond.q21 }}</td>
            <td>{{ guest.oceansSecond.q22 }}</td>
            <td>{{ guest.oceansSecond.q23 }}</td>
            <td>{{ guest.q24 }}</td>
            <td>{{ guest.oceansThird.q25 }}</td>
            <td>{{ guest.oceansThird.q26 }}</td>
            <td>{{ guest.oceansThird.q27 }}</td>
            <td>{{ guest.oceansThird.q28 }}</td>
            <td>{{ guest.oceansThird.q29 }}</td>
            <td>{{ guest.oceansThird.q30 }}</td>

            <td>{{ guest.banerjee.q1 }}</td>
            <td>{{ guest.banerjee.q2 }}</td>
            <td>{{ guest.banerjee.q3 }}</td>
            <td>{{ guest.banerjee.q4 }}</td>
            <td>{{ guest.banerjee.q5 }}</td>
            <td>{{ guest.banerjee.q6 }}</td>
            <td>{{ guest.banerjee.q7_1 }}</td>
            <td>{{ guest.banerjee.q7_2 }}</td>
            <td>{{ guest.banerjee.q7_3 }}</td>
            <td>{{ guest.banerjee.q7_4 }}</td>
            <td>{{ guest.banerjee.q7_5 }}</td>
            <td>{{ guest.banerjee.q7_6 }}</td>
            <td>{{ guest.banerjee.q8 }}</td>
            <td>{{ guest.banerjee.q9 }}</td>
            <td>{{ guest.banerjee.q10 }}</td>
            <td>{{ guest.banerjee.q11 }}</td>
            <td>{{ guest.banerjee.q12 }}</td>
            
            <td>{{ guest.banerjeeSecond.q13 }}</td>
            <td>{{ guest.banerjeeSecond.q14 }}</td>
            <td>{{ guest.banerjeeSecond.q15 }}</td>
            <td>{{ guest.banerjeeSecond.q16 }}</td>
            <td>{{ guest.banerjeeSecond.q17 }}</td>
            <td>{{ guest.banerjeeSecond.q18 }}</td>
            <td>{{ guest.banerjeeSecond.q19 }}</td>
            <td>{{ guest.banerjeeSecond.q20 }}</td>
            <td>{{ guest.banerjeeSecond.q20_1 }}</td>
            <td>{{ guest.banerjeeSecond.q21 }}</td>

            <td>{{ guest.banerjeeThird.q22 }}</td>
            <td>{{ guest.banerjeeThird.q23 }}</td>
            <td>{{ guest.banerjeeThird.q24 }}</td>
            <td>{{ guest.banerjeeThird.q25 }}</td>
            <td>{{ guest.banerjeeThird.q26 }}</td>
            <td>{{ guest.banerjeeThird.q26_1 }}</td>
            <td>{{ guest.banerjeeThird.q27 }}</td>
            <td>{{ guest.banerjeeThird.q28 }}</td>
            <td>{{ guest.banerjeeThird.q29 }}</td>
            <td>{{ guest.banerjeeThird.q30 }}</td>
            <td>{{ guest.banerjeeThird.q31 }}</td>
            <td>{{ guest.banerjeeThird.q32 }}</td>

            <td>{{ guest.pi.q1 }}</td>
            <td>{{ guest.pi.q2 }}</td>
            <td>{{ guest.pi.q3 }}</td>
            <td>{{ guest.pi.q4 }}</td>
            <td>{{ guest.pi.q5 }}</td>
            <td>{{ guest.pi.q6 }}</td>
            <td>{{ guest.pi.q7 }}</td>
            <td>{{ guest.pi.q8 }}</td>
            <td>{{ guest.pi.q9 }}</td>
            <td>{{ guest.pi.q10 }}</td>
            <td>{{ guest.pi.q10_1 }}</td>

            <td>{{ guest.piSecond.q11 }}</td>
            <td>{{ guest.piSecond.q12 }}</td>
            <td>{{ guest.piSecond.q13 }}</td>
            <td>{{ guest.piSecond.q14 }}</td>
            <td>{{ guest.piSecond.q15 }}</td>
            <td>{{ guest.piSecond.q16 }}</td>
            <td>{{ guest.piSecond.q17 }}</td>
            <td>{{ guest.piSecond.q17_1 }}</td>
            <td>{{ guest.piSecond.q18 }}</td>
            <td>{{ guest.piSecond.q20 }}</td>
            <td>{{ guest.piSecond.q21 }}</td>
            <td>{{ guest.piSecond.q21_1 }}</td>

            <td>{{ guest.piThird.q22 }}</td>
            <td>{{ guest.piThird.q23 }}</td>
            <td>{{ guest.piThird.q24 }}</td>
            <td>{{ guest.piThird.q25 }}</td>
            <td>{{ guest.piThird.q26 }}</td>
            <td>{{ guest.piThird.q27 }}</td>
            <td>{{ guest.piThird.q28 }}</td>
            <td>{{ guest.piThird.q29 }}</td>
            <td>{{ guest.piThird.q30 }}</td>

        </tr>
      {% endfor %}
    </tbody>
</table>
</div>

{{ javascript_include("js/jquery.js") }}
<script>
    $(document).ready(function () {

    function exportTableToCSV($table, filename) {

        // Debug info ---------------------------------------------------------------
        console.log($table);
        console.log(filename);
        var $rows2 = $table.find('tr:has(td)');
        console.log($rows2);
        var tmpColDelim2 = String.fromCharCode(11);
        var tmpRowDelim2 = String.fromCharCode(0);
        var colDelim2 = ',';
        var rowDelim2 = '\r\n';
        var csv = $rows2.map(function (i, row) {
            var $row2 = $(row),
                $cols2 = $row2.find('td');

            return $cols2.map(function (j, col) {
                var $col2 = $(col),
                    text = '"' + $col2.text().replace(/(\r\n|\n|\r)/gm, "").trim() + '"';

                return text //.replace('"', '""'); // escape double quotes

            }).get().join(tmpColDelim2);

        }).get().join(tmpRowDelim2)
            .split(tmpRowDelim2).join(rowDelim2)
            .split(tmpColDelim2).join(colDelim2);
        console.log(csv);
        // End debug -----------------------------------------------------------------

        var $rows = $table.find('tr:has(td)'),

            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            tmpColDelim = String.fromCharCode(11), // vertical tab character
            tmpRowDelim = String.fromCharCode(0), // null character

            // actual delimiter characters for CSV format
            colDelim = ",",
            rowDelim = "\r\n",

            // Grab text from table into CSV formatted string
            csv = $rows.map(function (i, row) {
                var $row = $(row),
                    $cols = $row.find('td');

                return $cols.map(function (j, col) {
                    var $col = $(col),
                        text = '"' + $col.text().replace(/(\r\n|\n|\r)/gm, "").trim() + '"';

                    return text //.replace('"', '""'); // escape double quotes

                }).get().join(tmpColDelim);

            }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim),
            // Data URI
            csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

        $(this)
            .attr({
            'download': filename,
                'href': csvData,
                'target': '_blank'
        });
    }

    // This must be a hyperlink
    $("#export").on('click', function (event) {
        // CSV
        exportTableToCSV.apply(this, [$('#dados'), 'export.csv']);

        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });
});

jQuery.fn.table2CSV = function (options) {
    var options = jQuery.extend({
        separator: ',',
        header: [],
        delivery: 'popup' // popup, value
    },
    options);

    var csvData = [];
    var headerArr = [];
    var el = this;

    //header
    var numCols = options.header.length;
    var tmpRow = []; // construct header avalible array

    if (numCols > 0) {
        for (var i = 0; i < numCols; i++) {
            tmpRow[tmpRow.length] = formatData(options.header[i]);
        }
    } else {
        $(el).filter(':visible').find('th').each(function () {
            if ($(this).css('display') != 'none') tmpRow[tmpRow.length] = formatData($(this).html());
        });
    }

    row2CSV(tmpRow);

    // actual data
    $(el).find('tr').each(function () {
        var tmpRow = [];
        $(this).filter(':visible').find('td').each(function () {
            if ($(this).css('display') != 'none') tmpRow[tmpRow.length] = formatData($(this).html());
        });
        row2CSV(tmpRow);
    });
    if (options.delivery == 'popup') {
        var mydata = csvData.join('\n');
        return popup(mydata);
    } else {
        var mydata = csvData.join('\n');
        return mydata;
    }

    function row2CSV(tmpRow) {
        var tmp = tmpRow.join('') // to remove any blank rows
        // alert(tmp);
        if (tmpRow.length > 0 && tmp != '') {
            var mystr = tmpRow.join(options.separator);
            csvData[csvData.length] = mystr;
        }
    }

    function formatData(input) {
        // replace " with â€œ
        var regexp = new RegExp(/["]/g);
        var output = input.replace(regexp, "â€œ");
        //HTML
        var regexp = new RegExp(/\<[^\<]+\>/g);
        var output = output.replace(regexp, "");
        if (output == "") return '';
        return '"' + output + '"';
    }

    function popup(data) {
        var generator = window.open('', 'csv', 'height=400,width=600');
        generator.document.write('<html><head><title>CSV</title>');
        generator.document.write('</head><body >');
        generator.document.write('<textArea cols=70 rows=15 wrap="off" >');
        generator.document.write(data);
        generator.document.write('</textArea>');
        generator.document.write('</body></html>');
        generator.document.close();
        return true;
    }
};
</script>