/**Generate by ASGENS
 *@author Charlietyn
 *@date Thu Dec 30 02:00:31 GMT-05:00 2021
 *@time Thu Dec 30 02:00:31 GMT-05:00 2021
 */

import {notification} from "ant-design-vue"
import axios_api from "@/config/axios/axios"
import moment from "moment";

/**
 * Returns booleam if  the object contains this value in one of the attributes
 * @param {Object} object the object to compare
 * @param {String} value to contain
 */
export function filter_object(object, value, columns = null) {
    if (!value) {
        return true
    }
    const keys = Object.keys(object)
    let i
    for (i of keys) {
        if (object[i] == null) {
            continue
        }
        if (
            object[i]
                .toString()
                .toLowerCase()
                .indexOf(value.toLowerCase()) != -1
        ) {
            return true
        }
    }
}

export function compare_object(object1, object2) {
    return Object.keys(object1).every(function (element) {
        return Object.keys(object2).find(function (element2) {
            return element == element2
        })
    })
}

export function debounce(fn, delay) {
    var timeoutID = null
    return function () {
        clearTimeout(timeoutID)
        var args = arguments
        var that = this
        timeoutID = setTimeout(function () {
            fn.apply(that, args)
        }, delay)
    }
}

export function process_data(v, all_data = []) {
    const head = v.columns
        .filter(
            (element) => element.key !== "action_elements" && !element.hide_on_export
        )
        .map((element) => {
            return element.title
        })
    const iterate_data = all_data.length > 0 ? all_data : v.data
    const data = iterate_data.map((element) => {
        return v.columns
            .filter(
                (column) => column.key !== "action_elements" && !column.hide_on_export
            )
            .map((column) => {
                let nested = null
                if (column.key.indexOf(".") != -1) {
                    column.key.split(".").forEach((index) => {
                        nested = !nested ? element[index] : nested[index]
                    })
                }
                let value =
                    column.key.indexOf(".") == -1 ? element[column.key] : nested
                return value
            })
    })
    return {head, data}
}

export function exportToExcelVinstance(v, all_data = [], customFileName = null) {
    const {head, data} = process_data(v, all_data)
    exportToExcel(head, data, customFileName || v.$options.name)
}

export function exportToCSV(v) {
    const {head, data} = process_data(v)
    let csvContent = [head]
        .concat(data)
        .map((e) => e.join(","))
        .join("\n")
    const hiddenElement = document.createElement("a")
    hiddenElement.href = "data:text/csv;charset=utf-8," + encodeURI(csvContent)
    hiddenElement.target = "_blank"
    hiddenElement.download = "output.csv"
    hiddenElement.click()
}

export function extract_user_data(name, token) {
    const user_data = jwtDecode(token).payload
    return {[name]: user_data.sub, ...user_data}
}

export function exportToExcel(head, data, title = "export.xls") {
    const uri = "data:application/vnd.ms-excel;base64,"
    const template =
        "" +
        "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\"><meta http-equiv=\"content-type\" content=\"application/vnd.ms-excel; charset=UTF-8\">" +
        "<head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head>" +
        "<body>" +
        "<table>" +
        "{table}" +
        "</table>" +
        "</body>" +
        "</html>"
    let table = "<thead><tr>"
    head.forEach((element) => {
        table += "<th style=\"width: 250px\">" + element + "</th>"
    })
    table += "</tr></thead><tbody>"
    data.forEach((element) => {
        table += "<tr>"
        element.forEach((data) => {
            table += "<td>" + data + "</td>"
        })
        table += "</tr>"
    })
    table += "</tbody>"

    const base64 = function (s) {
        return window.btoa(unescape(encodeURIComponent(s)))
    }
    const format = function (s, c) {
        return s.replace(/{(\w+)}/g, function (m, p) {
            return c[p]
        })
    }

    const ctx = {
        worksheet: "Worksheet",
        table: table,
    }
    const link = document.createElement("a")
    link.download = title
    link.href = uri + base64(format(template, ctx))
    link.click()
}

export function exportToExcelObject(head, data, title = "export.xls") {
    const uri = "data:application/vnd.ms-excel;base64,"
    const template =
        "" +
        "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\"><meta http-equiv=\"content-type\" content=\"application/vnd.ms-excel; charset=UTF-8\">" +
        "<head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head>" +
        "<body>" +
        "<table>" +
        "{table}" +
        "</table>" +
        "</body>" +
        "</html>"
    let table = "<thead><tr>"
    head.forEach((element) => {
        table += "<th style=\"width: 250px\">" + element + "</th>"
    })

    table += "</tr></thead><tbody>"
    data.forEach((element) => {
        table += "<tr>"
        Object.values(element).forEach((data) => {
            table += "<td>" + data + "</td>"
        })
        table += "</tr>"
    })
    table += "</tbody>"

    const base64 = function (s) {
        return window.btoa(unescape(encodeURIComponent(s)))
    }
    const format = function (s, c) {
        return s.replace(/{(\w+)}/g, function (m, p) {
            return c[p]
        })
    }

    const ctx = {
        worksheet: "Worksheet",
        table: table,
    }
    const link = document.createElement("a")
    link.download = title
    link.href = uri + base64(format(template, ctx))
    link.click()
}

export function exportLiquidationToExcel(number,data, signatures, confection_date, title = "export.xls") {

    data.sort((a, b) => a[0].toString().localeCompare(b[0].toString(), undefined, { numeric: true, sensitivity: 'base' }));

    const uri = "data:application/vnd.ms-excel;base64,"
    const template =
        "<html xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">" +
        "<head><meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\"><meta name=ProgId content=Excel.Sheet><meta name=Generator content=\"Microsoft Excel 15\"><!--[if !mso]><style>v\\:* {behavior:url(#default#VML);}o\\:* {behavior:url(#default#VML);}x\\:* {behavior:url(#default#VML);}.shape {behavior:url(#default#VML);}</style><![endif]--><style id=\"contabilidad liquidación_18500_Styles\"><!--table\t{mso-displayed-decimal-separator:\"\\,\";\tmso-displayed-thousand-separator:\"\\.\";}.xl1518500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6318500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:1.0pt solid windowtext;\tborder-right:none;\tborder-bottom:none;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6418500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tborder-top:1.0pt solid windowtext;\tborder-right:none;\tborder-bottom:none;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6518500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tborder-top:1.0pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:none;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6618500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:none;\tborder-right:none;\tborder-bottom:none;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6718500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tborder-top:none;\tborder-right:1.0pt solid windowtext;\tborder-bottom:none;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:14.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl6918500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7018500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7118500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:none;\tborder-right:1.0pt solid windowtext;\tborder-bottom:none;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7218500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\tmso-protection:unlocked visible;\twhite-space:normal;}.xl7318500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:bottom;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\tmso-protection:unlocked visible;\twhite-space:nowrap;}.xl7418500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7518500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:Fixed;\ttext-align:center;\tvertical-align:bottom;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7618500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"_-* \\#\\,\\#\\#0\\.00_-\\;\\\\-* \\#\\,\\#\\#0\\.00_-\\;_-* \\0022-\\0022??_-\\;_-\\@_-\";\ttext-align:center;\tvertical-align:bottom;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7718500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\tmso-protection:unlocked visible;\twhite-space:nowrap;}.xl7818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:Fixed;\ttext-align:center;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl7918500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"_-* \\#\\,\\#\\#0\\.00_-\\;\\\\-* \\#\\,\\#\\#0\\.00_-\\;_-* \\0022-\\0022??_-\\;_-\\@_-\";\ttext-align:center;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8018500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:Fixed;\ttext-align:center;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8118500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\tmso-protection:unlocked visible;\twhite-space:nowrap;}.xl8218500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:left;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\tmso-protection:unlocked visible;\twhite-space:normal;}.xl8318500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\tmso-protection:unlocked visible;\twhite-space:normal;}.xl8418500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:9.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:middle;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8518500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"Short Date\";\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8618500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8718500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"_-* \\#\\,\\#\\#0\\.00_-\\;\\\\-* \\#\\,\\#\\#0\\.00_-\\;_-* \\0022-\\0022??_-\\;_-\\@_-\";\ttext-align:center;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl8918500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9018500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9118500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9218500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9318500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:1.0pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:none;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl9418500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl9518500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:none;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9618500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9718500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl9918500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:.5pt solid windowtext;\tborder-right:none;\tborder-bottom:none;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10018500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:none;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10118500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:none;\tborder-right:none;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10218500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10318500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:none;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10418500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10518500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"Short Date\";\ttext-align:left;\tvertical-align:top;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10618500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:.5pt solid windowtext;\tborder-right:none;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10718500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl10818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl10918500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl11018500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:.5pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:none;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl11118500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:none;\tborder-right:1.0pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl11218500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:none;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl11318500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:.5pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl11418500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:1.0pt solid windowtext;\tborder-right:none;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl11518500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:bottom;\tborder-top:1.0pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:nowrap;}.xl11618500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl11718500\t{padding:0px;\tmso-ignore:padding;\tcolor:black;\tfont-size:11.0pt;\tfont-weight:400;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Calibri, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:general;\tvertical-align:bottom;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl11818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:none;\tborder-right:none;\tborder-bottom:1.0pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl11918500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:none;\tborder-right:none;\tborder-bottom:1.0pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl12018500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:normal;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:left;\tvertical-align:top;\tborder-top:none;\tborder-right:1.0pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:none;\tmso-background-source:auto;\tmso-pattern:auto;\twhite-space:normal;}.xl12118500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tborder-top:1.0pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:none;\tborder-left:1.0pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12218500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tborder-top:none;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:1.0pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12318500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:1.0pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12418500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:\"\\@\";\ttext-align:center;\tvertical-align:middle;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12518500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tborder-top:1.0pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12618500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tborder-top:1.0pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:.5pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12718500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tborder-top:.5pt solid windowtext;\tborder-right:.5pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}.xl12818500\t{padding:0px;\tmso-ignore:padding;\tcolor:windowtext;\tfont-size:10.0pt;\tfont-weight:700;\tfont-style:italic;\ttext-decoration:none;\tfont-family:Arial, sans-serif;\tmso-font-charset:0;\tmso-number-format:General;\ttext-align:center;\tvertical-align:middle;\tborder-top:.5pt solid windowtext;\tborder-right:1.0pt solid windowtext;\tborder-bottom:1.0pt solid windowtext;\tborder-left:.5pt solid windowtext;\tbackground:#BDD7EE;\tmso-pattern:black none;\twhite-space:normal;}--></style></head>" +
        "<body>" +
        "<div id=\"contabilidad liquidación_18500\" align=center x:publishsource=\"Excel\">" +
        "<table border=0 cellpadding=0 cellspacing=0 width=1122 style='border-collapse: collapse;table-layout:fixed;width:841pt'>" +
        "<col width=80 span=2 style='width:60pt'> " +
        "<col width=247 style='display: inline-table;mso-width-source:userset;mso-width-alt:9033;width:185pt'> " +
        "<col width=80 span=2 style='width:60pt'> <col width=115 style='mso-width-source:userset;mso-width-alt:4205;width:86pt'> " +
        "<col width=119 span=2 style='mso-width-source:userset;mso-width-alt:4352; width:89pt'> " +
        "<col width=117 style='mso-width-source:userset;mso-width-alt:4278;width:88pt'> " +
        "<col width=85 style='mso-width-source:userset;mso-width-alt:3108;width:64pt'>" +
        "{table}" +
        "</table>" +
        "</div>" +
        "</body>" +
        "</html>"

    let cortes = Math.ceil(data.length / 30)
    // console.log(data.length);
    let count_element = 0
    let form_fila = 9
    let table = ""
    // console.log(data);
    // console.log(cortes);

    for (let i = 0; i < cortes; i++) {
        table += "<tr height=21 style='height:15.75pt'>" +
            "<td height=21 class=xl1518500 width=80 style='height:15.75pt;width:60pt'></td>  " +
            "<td class=xl1518500 width=80 style='width:60pt'></td>  " +
            "<td class=xl1518500 width=247 style='width:185pt'></td>  " +
            "<td class=xl1518500 width=80 style='width:60pt'></td>  " +
            "<td class=xl1518500 width=80 style='width:60pt'></td>  " +
            "<td class=xl1518500 width=115 style='width:86pt'></td>  " +
            "<td class=xl1518500 width=119 style='width:89pt'></td>  " +
            "<td class=xl1518500 width=119 style='width:89pt'></td>  " +
            "<td class=xl1518500 width=117 style='width:88pt'></td>  " +
            "<td class=xl1518500 width=85 style='width:64pt'></td> "

        table += "</tr><tr height=20 style='height:15.0pt'> "

        table += "<td height=20 class=xl1518500 style='height:15.0pt'></td>  " +
            "<td class=xl6318500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6418500>&nbsp;</td>  " +
            "<td class=xl6518500>&nbsp;</td>  "
        table += "</tr><tr height=20 style='height:15.0pt'>  "
        table += "<td height=20 class=xl1518500 style='height:15.0pt'></td> " +
            " <td rowspan=3 height=64 class=xl6618500 width=80 style='mso-ignore:colspan-rowspan;  height:48.0pt;width:60pt'>" +
            "<span style='mso-ignore:vglayout'>  " +
            "<table cellpadding=0 cellspacing=0>" +
            "<tr><td width=20 height=2></td></tr>   " +
            "<tr><td></td>" +
            "<td>" +
            "Logo</td>" +
            "<td width=0></td>" +
            "</tr>" +
            "<tr>    <td height=14></td>   </tr>  </table>  </span></td>" +
            "<td class=xl1518500></td>  <td class=xl1518500></td>  <td class=xl1518500></td>  " +
            "<td colspan=2 class=xl11618500 width=234 style='width:175pt'></td>  " +
            "<td colspan=2 class=xl11618500 width=236 style='width:177pt'>Fecha:<span  style='mso-spacerun:yes'>"+ confection_date.format("YYYY-MM-DD") +  "</span></td>  " +
            "<td class=xl6718500>&nbsp;</td> "
        table += "</tr><tr height=20 style='height:15.0pt'>  "
        table += "<td height=20 class=xl1518500 style='height:15.0pt'></td>  " +
            "<td class=xl1518500></td>  <td class=xl1518500></td>  <td class=xl1518500></td>" +
            "<td class=xl1518500></td>  <td class=xl1518500></td> " +
            " <td class=xl1518500></td>  <td class=xl1518500></td>  " +
            "<td class=xl6718500>&nbsp;</td> "
        table += "</tr> <tr height=24 style='height:18.0pt'>"
        table += "<td height=24 class=xl1518500 style='height:18.0pt'></td>  <td class=xl1518500></td>  "

        if (title.includes("Insurance_Travel_Out_Esen")){
            table += "<td class=xl6818500>LIQUIDACIÓN DE COBROS ESEN VIAJES OUT</td>  <td class=xl6818500></td>  "
        }
        else if (title.includes("Insurance_Travel_In_Esen")){
            table += "<td class=xl6818500>LIQUIDACIÓN DE COBROS ESEN VIAJES IN</td>  <td class=xl6818500></td>  "
        }
        else {
            table += "<td class=xl6818500>LIQUIDACIÓN DE COBROS</td>  <td class=xl6818500></td>  "
        }


        table += "<td class=xl1518500></td>  <td class=xl1518500></td>  <td class=xl6918500>Liquidación N° "+number+"</td>  " +
            "<td class=xl7018500></td>  <td class=xl7118500>&nbsp;</td> "
        table += "</tr><tr height=21 style='height:15.75pt'>"


        table += "<td height=21 class=xl1518500 style='height:15.75pt'></td>  " +
            "<td colspan=9 class=xl11818500 width=1042 style='border-right:1.0pt solid black;  width:781pt'>" +
            "<span style='mso-spacerun:yes'>      </span>Código: 254.0.60256</td>"


//Titulos de la Tabla Liquidación
        table += "<!-- Titulos-->\n" +
            " </tr><tr height=34 style='mso-height-source:userset;height:25.5pt'>\n"
        table += "<td height=34 class=xl1518500 style='height:25.5pt'></td>\n" +
            "<td rowspan=2 class=xl12118500 width=80 style='border-bottom:1.0pt solid black; border-top:none;width:60pt'>Número Voucher</td>\n" +
            "<td rowspan=2 class=xl12318500 width=247 style='border-bottom:1.0pt solid black; border-top:none;width:185pt'>Nombres y Apellidos del asegurado o tomador</td>\n" +
            "<td rowspan=2 class=xl12318500 width=80 style='border-bottom:1.0pt solid black; border-top:none;width:60pt'>Tipo de Moneda<span style='mso-spacerun:yes'> </span></td>\n" +
            "<td rowspan=2 class=xl9318500 width=80 style='border-bottom:1.0pt solid black; border-top:none;width:60pt'>Inst. de pago</td>\n" +
            "<td rowspan=2 class=xl9318500 width=115 style='border-bottom:1.0pt solid black; border-top:none;width:86pt'>Importe de la Prima<span style='mso-spacerun:yes'> </span></td>\n" +
            "<td rowspan=2 class=xl12318500 width=119 style='border-bottom:1.0pt solid black; border-top:none;width:89pt'>Comisión<span style='mso-spacerun:yes'> </span></td>\n" +
            "<td rowspan=2 class=xl12318500 width=119 style='border-bottom:1.0pt solid black; border-top:none;width:89pt'>Importe a Pagar<span style='mso-spacerun:yes'> </span></td>\n" +
            "<td colspan=2 rowspan=2 class=xl12518500 width=202 style='border-right:1.0pt solid black; border-bottom:1.0pt solid black;width:152pt'>Concepto del Pago<span style='mso-spacerun:yes'> </span></td>"

        table += "</tr><tr height=21 style='height:15.75pt'>" +
            "<td height=21 class=xl1518500 style='height:15.75pt'></td></tr>"


        //Ventas de Liquidación

        let stop = count_element + 30 //elemento de la lista en que debe cortar la tabla
        let sum_elem = 0 //cantidad de elementos a sumar
        for (count_element; count_element < data.length && count_element < stop; count_element++) {
            let element = data[count_element]

            table += "<tr height=20 style='height:15.0pt'>" +
                "<td height=20 class=xl1518500 style='height:15.0pt'></td>" +
                "<td class=xl7218500 width=80 style='width:60pt'>" + element[0] + "</td>\n" +
                "<td class=xl7318500 style='border-left:none'>" + element[1] + "</td>\n" +
                "<td class=xl7418500 style='border-left:none'>" + element[2] + "</td>\n" +
                "<td class=xl7518500 style='border-left:none'>" + element[3] + "</td>\n" +
                "<td class=xl7518500 style='border-left:none'>" + element[4] + "</td>\n" +
                "<td class=xl7618500 style='border-left:none'>" + element[5] + "</td>\n" +
                "<td class=xl7618500 style='border-left:none'>" + element[6] + "</td>\n" +
                "<td colspan=2 class=xl11418500 style='border-right:1.0pt solid black; border-left:none'>" + element[7] + "</td>\n" +
                "</tr>"
            sum_elem++
        }


        //Datos pie de tabla
        table += " <tr height=20 style='height:15.0pt'>\n"

        let f = "=SUMA(F" + form_fila + ":F" + ((form_fila + sum_elem) - 1).toString() + ")"
        let g = "=SUMA(G" + form_fila + ":G" + ((form_fila + sum_elem) - 1).toString() + ")"
        let h = "=SUMA(H" + form_fila + ":H" + ((form_fila + sum_elem) - 1).toString() + ")"
        table += "  <td height=20 class=xl1518500 style='height:15.0pt'></td>\n" +
            "  <td class=xl8518500 style='border-top:none'>&nbsp;</td>\n" +
            "  <td class=xl8618500 style='border-top:none;border-left:none'>TOTAL</td>\n" +
            "  <td class=xl8718500 style='border-top:none;border-left:none'>&nbsp;</td>\n" +
            "  <td class=xl8818500 style='border-top:none;border-left:none'>&nbsp;</td>\n" +
            "  <td class=xl8818500 style='border-top:none;border-left:none'>" + f + "</td>\n" +
            "  <td class=xl8818500 style='border-top:none;border-left:none'>" + g + "</td>\n" +
            "  <td class=xl8818500 style='border-top:none;border-left:none'>" + h + "</td>\n" +
            "  <td colspan=2 class=xl9518500 style='border-right:1.0pt solid black;\n" +
            "  border-left:none'>&nbsp;</td>"

        table += " </tr><tr height=20 style='height:15.0pt'>\n"

        table += "  <td height=20 class=xl1518500 style='height:15.0pt'></td>\n" +
            "  <td colspan=2 rowspan=2 class=xl9718500>Confeccionado por:<span\n" +
            "  style='mso-spacerun:yes'>" + signatures.confection + "</span></td>\n" +
            "  <td colspan=2 rowspan=2 class=xl9918500 style='border-right:.5pt solid black;\n" +
            "  border-bottom:.5pt solid black'>Recibido por:<span\n" +
            "  style='mso-spacerun:yes'>" + signatures.reception + "</span></td>\n" +
            "  <td colspan=3 rowspan=2 class=xl9818500>Contabilizado por:<span\n" +
            "  style='mso-spacerun:yes'>" + signatures.accountant + "</span></td>\n" +
            "  <td colspan=2 class=xl10318500 style='border-right:1.0pt solid black;\n" +
            "  border-left:none'>No. Depósito:</td>\n"

        table += " </tr><tr height=20 style='height:15.0pt'>\n"

        table += "  <td height=20 class=xl1518500 style='height:15.0pt'></td>\n" +
            "  <td class=xl8918500 style='border-top:none;border-left:none'>CHEQUE</td>\n" +
            "  <td class=xl9018500 style='border-top:none;border-left:none'>EFECTIVO</td>"

        table += " </tr><tr height=20 style='height:15.0pt'>\n"

        table += "  <td height=20 class=xl1518500 style='height:15.0pt'></td>\n" +
            "  <td colspan=2 class=xl10518500>Fecha: <span style='mso-spacerun:yes'>" + confection_date.format("YYYY-MM-DD") + "</span></td>\n" +
            "  <td colspan=2 class=xl10618500 style='border-right:.5pt solid black;\n" +
            "  border-left:none'>Fecha: <span style='mso-spacerun:yes'>" + confection_date.format("YYYY-MM-DD") + "</span></td>\n" +
            "  <td colspan=3 class=xl9818500 style='border-left:none'>Fecha: <span\n" +
            "  style='mso-spacerun:yes'>" +confection_date.format("YYYY-MM-DD") + "</span></td>\n" +
            "  <td rowspan=2 class=xl10818500 width=117 style='border-bottom:1.0pt solid black;\n" +
            "  border-top:none;width:88pt'>&nbsp;</td>\n" +
            "  <td rowspan=2 class=xl11018500 width=85 style='border-bottom:1.0pt solid black;\n" +
            "  border-top:none;width:64pt'>&nbsp;</td>\n"

        table += " </tr><tr height=21 style='height:15.75pt'>\n"

        table += "  <td height=21 class=xl1518500 style='height:15.75pt'></td>\n" +
            "  <td colspan=3 class=xl9218500>Recibido en ASISTUR:<span\n" +
            "  style='mso-spacerun:yes'> </span></td>\n" +
            "  <td class=xl9118500 style='border-top:none;border-left:none'>&nbsp;</td>\n" +
            "  <td colspan=3 class=xl9118500 style='border-left:none'>Fecha de Recibido en\n" +
            "  ASISTUR:</td>\n"
        table += " </tr>"

        //Para mover la fila de inicio de la formula
        form_fila = form_fila + (sum_elem + 4 + 9)
    }
    const base64 = function (s) {
        return window.btoa(unescape(s))
    }
    const format = function (s, c) {
        return s.replace(/{(\w+)}/g, function (m, p) {
            return c[p]
        }).toString()
    }

    const ctx = {
        worksheet: "Worksheet",
        table: table,
    }

        //
        // const params = {
        //     // attr: template
        // }
        // return axios_api({
        //     url: "/mod_insurance_out/billing_insurance_travel_out_esen/excel",
        //     method: "post",
        //     params: params,
        //     // responseType: "blob"
        // }).then((response) => {
        //     const blob = new Blob(
        //         [response.data], {type: "application/xls"})
        //     const href = window.URL.createObjectURL(blob)
        //     window.open(href)
        //     this.$store.site.loading = false
        // }).catch(error => {
        //     utils.process_error(error)
        //     this.$store.site.loading = false
        // })


    // const XLSX = require("xlsx");
    // console.log(format(template, ctx));
    // const parser = new DOMParser();
    // const doc = (new DOMParser).parseFromString(template, "text/html");
    // var data = document.getElementById('contabilidad liquidación_18500');
    // var workbook = XLSX.utils.table_to_book(data, {sheet: "sheet1"});
    //
    // // let workbook= XLSX.utils.table_to_book(format(template, ctx));
    //
    // XLSX.writeFileXLSX(workbook);


    const link = document.createElement("a")
    link.download = title
    link.href = uri + base64(format(template, ctx))
    link.click()
}

export function allow_character(elEvento, permitidos) {
    // Variables que definen los caracteres permitidos
    var numeros = "0123456789"
    var decimal_positivo = "0123456789."
    var decimal = "0123456789.-"
    var date = "0123456789/"
    var time = "0123456789:"
    var issn = "0123456789-"
    var none = ""
    var caracteres =
        " abcdefghijklmn?opqñrstuvwxyzABCDEFGHIJKLMÑN?OPQRSTUVWXYZéáíóú@_.,$%^&*()_+!~"
    var numeros_caracteres = numeros + caracteres
    var teclas_especiales = []
    // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
    // Seleccionar los caracteres a partir del par?metro de la funci?n
    switch (permitidos) {
        case "num":
            permitidos = numeros
            break
        case "car":
            permitidos = caracteres
            break
        case "num_car":
            permitidos = numeros_caracteres
            break
        case "dec":
            permitidos = decimal
            break
        case "dec_pos":
            permitidos = decimal_positivo
            break
        case "date":
            permitidos = date
            break
        case "time":
            permitidos = time
            break
        case "issn":
            permitidos = issn
            break
        case "none":
            permitidos = none
            break
    }

    // Obtener la tecla pulsada
    var evento = elEvento || window.event
    var codigoCaracter = evento.charCode || evento.keyCode
    var caracter = String.fromCharCode(codigoCaracter)

    // Comprobar si la tecla pulsada es alguna de las teclas especiales
    // (teclas de borrado y flechas horizontales)
    var tecla_especial = false
    for (var i in teclas_especiales) {
        if (codigoCaracter == teclas_especiales[i]) {
            tecla_especial = true
            break
        }
    }
    if (permitidos === "dec") {

    }
    // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
    // o si es una tecla especial
    return permitidos.indexOf(caracter) != -1 || tecla_especial
}

export function filter_object_column(object, value, columns) {
    if (!value) {
        return true
    }
    let i
    let iter = 0
    const keys = Object.values(columns)
    for (i of keys) {
        if (!i.dataIndex && !i.use_filter) {
            if (iter >= keys.length) {
                return false
            }
            continue
        }

        let array = i.key.split(".")
        if (object[array.length > 0 ? array[0] : i.key] instanceof Object) {
            let data = object
            array.forEach((iter) => {
                if (data) {
                    data = data[iter]
                }
            })
            if (
                data != null &&
                data
                    .toString()
                    .toLowerCase()
                    .indexOf(value.toLowerCase()) != -1
            ) {
                return true
            }
        } else {
            if (
                object[array[0]] != null &&
                object[array[0]]
                    .toString()
                    .toLowerCase()
                    .indexOf(value.toLowerCase()) != -1
            ) {
                return true
            }
        }
    }
}

export function openNotificationWithIcon(type, title, message) {
    notification[type]({
        message: title,
        description: message,
    })
}

export function capitalize(s) {
    if (typeof s !== "string") return s
    return s.charAt(0).toUpperCase() + s.slice(1)
}

export function process_error(error) {
    console.log("data error",error);
    let message = "Error"
    let description = ""

    let noCORS= false;
    if (error.response) {
        if(error.response.statusText!=="Cors Errors , There no status text"){
            description = error.response.data.message
            message = error.response.statusText
            if (error.response.status == 404) {
                description = "Page not found"
            }
        }
        else{
            noCORS=true;
        }

    } else if (error.request) {
        description = JSON.stringify(error.request)
    } else {
        description = error.message
    }

    if(!noCORS){
        openNotificationWithIcon("error", message, description)
    }


}

export function dynamic_import(regexp, requireModule, withModule = false) {
    const classes = {}
    requireModule.keys().forEach((fileName) => {
        const route = fileName.split("/")
        const module =
            withModule && route[route.indexOf("modules") + 1] !== "."
                ? route[route.indexOf("modules") + 1] + "."
                : ""
        const moduleName =
            module +
            capitalize(
                fileName
                    .replace(regexp, "")
                    .substr(
                        fileName.replace(regexp, "").lastIndexOf("/") + 1,
                        fileName.length
                    )
            )
        classes[moduleName] = {
            ...requireModule(fileName),
        }
    })
    return classes
}

export function process_response(
    response,
    action,
    description = null,
    message = null
) {
    let type = ""
    if (!response.data.success) {
        description = JSON.stringify(response.data.errors)
        if (response.data.delete) {
            description =
                "El elemento esta asociado a una relación es imposible su eliminación"
        }
        message = "Error in acción  " + action
        type = "error"
    } else {
        description = !description
            ? "El elemento fue " +
            (action == "delete" ? "eliminado" : action) +
            " correctamente"
            : description
        message = !message ? "Acción ejecutada correctamente" : message
        type = "success"
    }
    openNotificationWithIcon(type, message, description)
    return response.data.success
}

export const breadcrumbRouter = (url) => {
    return []
}

export const jwtDecode = function (t) {
    let token = {}
    token.raw = t
    token.header = JSON.parse(window.atob(t.split(".")[0]))
    token.payload = JSON.parse(window.atob(t.split(".")[1]))
    return token
}

export const convert_to_phone = function (t) {
    if (t) {
        var x = t.replace(/\D/g, "").match(/(\d{0,3})(\d{0,3})(\d{0,4})/)
        return !x[2] ? x[1] : "(" + x[1] + ")" + x[2] + (x[3] ? "-" + x[3] : "")
    }
    return ""
}

export const objectToFormData = function (obj, form, namespace) {
    var fd = form || new FormData()
    var formKey

    for (var property in obj) {
        if (obj[property] === undefined) {
            continue
        }
        if (obj.hasOwnProperty(property)) {
            if (namespace) {
                formKey = namespace + "[" + property + "]"
            } else {
                formKey = property
            }

            // if the property is an object, but not a File,
            // use recursivity.
            if (
                typeof obj[property] === "object" &&
                !(obj[property] instanceof File)
            ) {
                objectToFormData(obj[property], fd, property)
            } else {
                // if it's a string or a File object
                const value =
                    obj[property] == true || obj[property] == false
                        ? +obj[property]
                        : obj[property]
                fd.append(formKey, value)
            }
        }
    }

    return fd
}

export function isEmptyObject(obj) {
    return Object.keys(obj).length === 0
}

export const birthDateFromCI = (ci) => {
    const year = ci.substr(0, 2)
    const month = ci.substr(2, 2)
    const day = ci.substr(4, 2)
    return new Date(`${year}/${month}/${day}`)
}

export const validateNumber = (e) => {
    let key = e.keyCode
    if (key < 48 || key > 57) {
        e.preventDefault()
    }
}

export const changeSelectTitle = (value) => {
    document.querySelector(
        ".phone_code .ant-select-selection .ant-select-selection__rendered .ant-select-selection-selected-value"
    ).innerText = `+${value}`
}

export const getBirthDate = (ci) => {
    const year = parseInt(ci.substr(0, 2))
    const month = ci.substr(2, 2)
    const day = ci.substr(4, 2)
    const dateString = `${year > 20 ? "19" : "20"}${year}/${month}/${day}`
    const date = new Date(dateString)

    return date
}
export const getSex = (ci) => {
    const sexNumber = ci[ci.length - 2]
    return sexNumber % 2 === 0 ? "Masculino" : "Femenino"
}

export const getAge = (date, search_date = Date.now()) => {
    let ageDifMs = search_date - new Date(date).getTime()
    let ageDate = new Date(ageDifMs)
    return Math.abs(ageDate.getUTCFullYear() - 1970)
}

export function set_proxy(obj) {
    "use strict"
    if (typeof Proxy == "undefined") {
        throw new Error("This browser doesn't support Proxy")
    }
    obj = new Proxy(obj, {
        set(target, name, value, receiver) {
            if (!Reflect.has(target, name)) {
                console.warn(
                    `Setting non-existent property '${name}', initial value: ${value}`
                )
            } else {
                target._changed_attributes = Object.assign(
                    target._changed_attributes || {},
                    {[name]: value}
                )
            }
            return Reflect.set(target, name, value, receiver)
        },
    })
    return obj
}

export function getNacionality (){
    let nac =[
        {
            "pais": "Afganistán",
            "demonym": "Afgano"
        },
        {
            "pais": "Albania",
            "demonym": "Albanés"
        },
        {
            "pais": "Alemania",
            "demonym": "Alemán"
        },
        {
            "pais": "Argelia",
            "demonym": "Argelino"
        },
        {
            "pais": "Andorra",
            "demonym": "Andorrano"
        },
        {
            "pais": "Angola",
            "demonym": "Angoleño"
        },
        {
            "pais": "Antigua Y Barbuda",
            "demonym": "Antiguano O Barbudense"
        },
        {
            "pais": "Argentina",
            "demonym": "Argentino"
        },
        {
            "pais": "Armenia",
            "demonym": "Armenio"
        },
        {
            "pais": "Australia",
            "demonym": "Australiano"
        },
        {
            "pais": "Austria",
            "demonym": "Austríaco"
        },
        {
            "pais": "Azerbaiyán",
            "demonym": "Azerbaiyano"
        },
        {
            "pais": "Bahamas",
            "demonym": "Bahameño"
        },
        {
            "pais": "Baréin",
            "demonym": "Bareiní"
        },
        {
            "pais": "Bangladés",
            "demonym": "Bangladesí"
        },
        {
            "pais": "Barbados",
            "demonym": "Barbadense"
        },
        {
            "pais": "Bielorrusia",
            "demonym": "Bielorruso"
        },
        {
            "pais": "Bélgica",
            "demonym": "Belga"
        },
        {
            "pais": "Belice",
            "demonym": "Beliceño"
        },
        {
            "pais": "Benín",
            "demonym": "Beninés"
        },
        {
            "pais": "Bután",
            "demonym": "Butanés"
        },
        {
            "pais": "Bolivia",
            "demonym": "Boliviano"
        },
        {
            "pais": "Bosnia Y Herzegovina",
            "demonym": "Bosnio O Herzegovino"
        },
        {
            "pais": "Botsuana",
            "demonym": "Botsuano"
        },
        {
            "pais": "Brasil",
            "demonym": "Brasileño"
        },
        {
            "pais": "Brunéi",
            "demonym": "Bruneano"
        },
        {
            "pais": "Bulgaria",
            "demonym": "Búlgaro"
        },
        {
            "pais": "Burkina Faso",
            "demonym": "Burkinés"
        },
        {
            "pais": "Burundi",
            "demonym": "Burundés"
        },
        {
            "pais": "Camboya",
            "demonym": "Camboyano"
        },
        {
            "pais": "Camerún",
            "demonym": "Camerunés"
        },
        {
            "pais": "Canadá",
            "demonym": "Canadiense"
        },
        {
            "pais": "Cabo Verde",
            "demonym": "Caboverdiano"
        },
        {
            "pais": "Chad",
            "demonym": "Chadiano"
        },
        {
            "pais": "Chile",
            "demonym": "Chileno"
        },
        {
            "pais": "China",
            "demonym": "Chino"
        },
        {
            "pais": "Chipre",
            "demonym": "Chipriota"
        },
        {
            "pais": "Colombia",
            "demonym": "Colombiano"
        },
        {
            "pais": "Comoras",
            "demonym": "Comorense"
        },
        {
            "pais": "República Democrática Del Congo",
            "demonym": "Congoleño"
        },
        {
            "pais": "Corea Del Norte",
            "demonym": "Norcoreano"
        },
        {
            "pais": "Corea Del Sur",
            "demonym": "Surcoreano"
        },
        {
            "pais": "Costa De Marfil",
            "demonym": "Marfileño"
        },
        {
            "pais": "Costa Rica",
            "demonym": "Costarricense"
        },
        {
            "pais": "Croacia",
            "demonym": "Croata"
        },
        {
            "pais": "Cuba",
            "demonym": "Cubano"
        },
        {
            "pais": "Dinamarca",
            "demonym": "Danés"
        },
        {
            "pais": "Dominica",
            "demonym": "Dominiqués"
        },
        {
            "pais": "Ecuador",
            "demonym": "Ecuatoriano"
        },
        {
            "pais": "Egipto",
            "demonym": "Egipcio"
        },
        {
            "pais": "El Salvador",
            "demonym": "Salvadoreño"
        },
        {
            "pais": "Emiratos Árabes Unidos",
            "demonym": "Emiratí"
        },
        {
            "pais": "Eritrea",
            "demonym": "Eritreo"
        },
        {
            "pais": "Eslovaquia",
            "demonym": "Eslovaco"
        },
        {
            "pais": "Eslovenia",
            "demonym": "Esloveno"
        },
        {
            "pais": "España",
            "demonym": "Español"
        },
        {
            "pais": "Estados Unidos",
            "demonym": "Estadounidense"
        },
        {
            "pais": "Estonia",
            "demonym": "Estonio"
        },
        {
            "pais": "Etiopía",
            "demonym": "Etíope"
        },
        {
            "pais": "Islas Feroe",
            "demonym": "Feroés"
        },
        {
            "pais": "Fiji",
            "demonym": "Fiyiano"
        },
        {
            "pais": "Filipinas",
            "demonym": "Filipino"
        },
        {
            "pais": "Finlandia",
            "demonym": "Finlandés"
        },
        {
            "pais": "Francia",
            "demonym": "Francés"
        },
        {
            "pais": "Gabón",
            "demonym": "Gabonés"
        },
        {
            "pais": "Gales",
            "demonym": "Galés"
        },
        {
            "pais": "Gambia",
            "demonym": "Gambiano"
        },
        {
            "pais": "Georgia",
            "demonym": "Georgiano"
        },
        {
            "pais": "Ghana",
            "demonym": "Ghanés"
        },
        {
            "pais": "Granada",
            "demonym": "Granadino"
        },
        {
            "pais": "Grecia",
            "demonym": "Griego"
        },
        {
            "pais": "Guatemala",
            "demonym": "Guatemalteco"
        },
        {
            "pais": "Guinea",
            "demonym": "Guineano"
        },
        {
            "pais": "Guinea Ecuatorial",
            "demonym": "Ecuatoguineano"
        },
        {
            "pais": "Guyana",
            "demonym": "Guyanés"
        },
        {
            "pais": "Haití",
            "demonym": "Haitiano"
        },
        {
            "pais": "Honduras",
            "demonym": "Hondureño"
        },
        {
            "pais": "Hungría",
            "demonym": "Húngaro"
        },
        {
            "pais": "India",
            "demonym": "Indio"
        },
        {
            "pais": "Indonesia",
            "demonym": "Indonesio"
        },
        {
            "pais": "Irak",
            "demonym": "Iraquí"
        },
        {
            "pais": "Irán",
            "demonym": "Iraní"
        },
        {
            "pais": "Irlanda",
            "demonym": "Irlandés"
        },
        {
            "pais": "Islandia",
            "demonym": "Islandés"
        },
        {
            "pais": "Islas Marshall",
            "demonym": "Marshalés"
        },
        {
            "pais": "Islas Salomón",
            "demonym": "Salomonense"
        },
        {
            "pais": "Israel",
            "demonym": "Israelí"
        },
        {
            "pais": "Italia",
            "demonym": "Italiano"
        },
        {
            "pais": "Jamaica",
            "demonym": "Jamaicano"
        },
        {
            "pais": "Japón",
            "demonym": "Japonés"
        },
        {
            "pais": "Jordania",
            "demonym": "Jordano"
        },
        {
            "pais": "Kazajistán",
            "demonym": "Kazajo"
        },
        {
            "pais": "Letonia",
            "demonym": "Letón"
        },
        {
            "pais": "Líbano",
            "demonym": "Libanés"
        },
        {
            "pais": "Liberia",
            "demonym": "Liberiano"
        },
        {
            "pais": "Libia",
            "demonym": "Libio"
        },
        {
            "pais": "Liechtenstein",
            "demonym": "Liechtensteiniano"
        },
        {
            "pais": "Lituania",
            "demonym": "Lituano"
        },
        {
            "pais": "Luxemburgo",
            "demonym": "Luxemburgués"
        },
        {
            "pais": "Macedonia Del Norte",
            "demonym": "Macedonio"
        },
        {
            "pais": "Madagascar",
            "demonym": "Malgache"
        },
        {
            "pais": "Malasia",
            "demonym": "Malasio"
        },
        {
            "pais": "Malaui",
            "demonym": "Malauí"
        },
        {
            "pais": "Maldivas",
            "demonym": "Maldivo"
        },
        {
            "pais": "Malí",
            "demonym": "Maliense"
        },
        {
            "pais": "Malta",
            "demonym": "Maltés"
        },
        {
            "pais": "Marruecos",
            "demonym": "Marroquí"
        },
        {
            "pais": "Mauricio",
            "demonym": "Mauriciano"
        },
        {
            "pais": "Mauritania",
            "demonym": "Mauritano"
        },
        {
            "pais": "México",
            "demonym": "Mexicano"
        },
        {
            "pais": "Micronesia",
            "demonym": "Micronesio"
        },
        {
            "pais": "Moldavia",
            "demonym": "Moldavo"
        },
        {
            "pais": "Mónaco",
            "demonym": "Monegasco"
        },
        {
            "pais": "Mongolia",
            "demonym": "Mongol"
        },
        {
            "pais": "Montenegro",
            "demonym": "Montenegrino"
        },
        {
            "pais": "Mozambique",
            "demonym": "Mozambiqueño"
        },
        {
            "pais": "Namibia",
            "demonym": "Namibio"
        },
        {
            "pais": "Nauru",
            "demonym": "Nauruano"
        },
        {
            "pais": "Nepal",
            "demonym": "Nepalí"
        },
        {
            "pais": "Nicaragua",
            "demonym": "Nicaragüense"
        },
        {
            "pais": "Níger",
            "demonym": "Nigerino"
        },
        {
            "pais": "Nigeria",
            "demonym": "Nigeriano"
        },
        {
            "pais": "Noruega",
            "demonym": "Noruego"
        },
        {
            "pais": "Nueva Zelanda",
            "demonym": "Neozelandés"
        },
        {
            "pais": "Omán",
            "demonym": "Omaní"
        },
        {
            "pais": "Países Bajos",
            "demonym": "Neerlandés"
        },
        {
            "pais": "Pakistán",
            "demonym": "Pakistaní"
        },
        {
            "pais": "Palaos",
            "demonym": "Palauano"
        },
        {
            "pais": "Palestina",
            "demonym": "Palestino"
        },
        {
            "pais": "Panamá",
            "demonym": "Panameño"
        },
        {
            "pais": "Papúa Nueva Guinea",
            "demonym": "Papú"
        },
        {
            "pais": "Paraguay",
            "demonym": "Paraguayo"
        },
        {
            "pais": "Perú",
            "demonym": "Peruano"
        },
        {
            "pais": "Polonia",
            "demonym": "Polaco"
        },
        {
            "pais": "Portugal",
            "demonym": "Portugués"
        },
        {
            "pais": "Qatar",
            "demonym": "Qatarí"
        },
        {
            "pais": "Reino Unido",
            "demonym": "Británico"
        },
        {
            "pais": "República Centroafricana",
            "demonym": "Centroafricano"
        },
        {
            "pais": "República Checa",
            "demonym": "Checo"
        },
        {
            "pais": "República Dominicana",
            "demonym": "Dominicano"
        },
        {
            "pais": "Ruanda",
            "demonym": "Ruandés"
        },
        {
            "pais": "Rumanía",
            "demonym": "Rumano"
        },
        {
            "pais": "Rusia",
            "demonym": "Ruso"
        },
        {
            "pais": "Samoa",
            "demonym": "Samoano"
        },
        {
            "pais": "San Cristóbal Y Nieves",
            "demonym": "Sanctocristobaleño O Nevisiano"
        },
        {
            "pais": "San Marino",
            "demonym": "Sanmarinense"
        },
        {
            "pais": "San Vicente Y Las Granadinas",
            "demonym": "Sanvicentino"
        },
        {
            "pais": "Santa Lucía",
            "demonym": "Santalucense"
        },
        {
            "pais": "Santo Tomé Y Príncipe",
            "demonym": "Santotomense"
        },
        {
            "pais": "Senegal",
            "demonym": "Senegalés"
        },
        {
            "pais": "Serbia",
            "demonym": "Serbio"
        },
        {
            "pais": "Seychelles",
            "demonym": "Seychelense"
        },
        {
            "pais": "Sierra Leona",
            "demonym": "Sierraleonés"
        },
        {
            "pais": "Singapur",
            "demonym": "Singapurense"
        },
        {
            "pais": "Siria",
            "demonym": "Sirio"
        },
        {
            "pais": "Somalia",
            "demonym": "Somalí"
        },
        {
            "pais": "Sri Lanka",
            "demonym": "Ceilanés"
        },
        {
            "pais": "Suazilandia",
            "demonym": "Suazi"
        },
        {
            "pais": "Sudáfrica",
            "demonym": "Sudafricano"
        },
        {
            "pais": "Sudán",
            "demonym": "Sudanés"
        },
        {
            "pais": "Sudán Del Sur",
            "demonym": "Sursudanés"
        },
        {
            "pais": "Suecia",
            "demonym": "Sueco"
        },
        {
            "pais": "Suiza",
            "demonym": "Suizo"
        },
        {
            "pais": "Surinam",
            "demonym": "Surinamés"
        },
        {
            "pais": "Tailandia",
            "demonym": "Tailandés"
        },
        {
            "pais": "Tanzania",
            "demonym": "Tanzano"
        },
        {
            "pais": "Taiwán",
            "demonym": "Taiwanés"
        },
        {
            "pais": "Tayikistán",
            "demonym": "Tayiko"
        },
        {
            "pais": "Timor Oriental",
            "demonym": "Timorense"
        },
        {
            "pais": "Togo",
            "demonym": "Togolés"
        },
        {
            "pais": "Tonga",
            "demonym": "Tongano"
        },
        {
            "pais": "Trinidad Y Tobago",
            "demonym": "Trinitense"
        },
        {
            "pais": "Túnez",
            "demonym": "Tunecino"
        },
        {
            "pais": "Turquía",
            "demonym": "Turco"
        },
        {
            "pais": "Turkmenistán",
            "demonym": "Turcomano"
        },
        {
            "pais": "Tuvalu",
            "demonym": "Tuvaluano"
        },
        {
            "pais": "Uganda",
            "demonym": "Ugandés"
        },
        {
            "pais": "Ucrania",
            "demonym": "Ucraniano"
        },
        {
            "pais": "Uruguay",
            "demonym": "Uruguayo"
        },
        {
            "pais": "Uzbekistán",
            "demonym": "Uzbeko"
        },
        {
            "pais": "Vanuatu",
            "demonym": "Vanuatuense"
        },
        {
            "pais": "Venezuela",
            "demonym": "Venezolano"
        },
        {
            "pais": "Vietnam",
            "demonym": "Vietnamita"
        },
        {
            "pais": "Yemen",
            "demonym": "Yemení"
        },
        {
            "pais": "Zambia",
            "demonym": "Zambiano"
        },
        {
            "pais": "Zimbabue",
            "demonym": "Zimbabuense"
        }
    ]

                return nac;



}

export function diff360(from_date, until_date) {
    return countDays(until_date) - countDays(from_date);
}

function countDays(dateMoment) {
    const year = dateMoment.year();
    const month = dateMoment.month() + 1;
    const day = dateMoment.date();
    return year * 360 + month * 30 + day;
}

export function validateIdCard(id_card) {
    if (!/^\d{11}$/.test(id_card)){
        return false;
    }

    const year = parseInt(id_card.substring(0, 2), 10);
    const month = parseInt(id_card.substring(2, 4), 10);
    const day = parseInt(id_card.substring(4, 6), 10);

    const date = moment(`${year}-${month}-${day}`, 'YY-MM-DD');

    return date.isValid();
}

