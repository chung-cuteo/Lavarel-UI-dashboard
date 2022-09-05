$(window).resize(function () {
    var path = $(this);
    var contW = path.width();
    if (contW >= 769) {
        $("#navbarVertical").css("display", "block");
    } else {
        $("#navbarVertical").css("display", "none");
    }
});

$(document).ready(function () {
    $(".navi-toogle-btn").click(function (e) {
        e.preventDefault();
        var marginLeft = $("#navbarVertical").css("display");
        if (marginLeft === "block") {
            $("#navbarVertical").css("display", "none");
        } else {
            $("#navbarVertical").css("display", "block");
        }
    });

    $("#sidebarAvatar").click(function (e) {
        e.preventDefault();
        $(".dropdown-menu ").toggle(200);
    });
});

/* chart.js chart examples */
// chart colors
const colors = [
    "#007bff",
    "#28a745",
    "#333333",
    "#c3e6cb",
    "#dc3545",
    "#6c757d",
];
const label = [
    "1日",
    "2日",
    "3日",
    "4日",
    "5日",
    "6日",
    "7日",
    "8日",
    "9日",
    "10日",
    "11日",
    "12日",
    "13日",
    "14日",
    "15日",
    "16日",
    "17日",
    "18日",
    "19日",
    "20日",
    "21日",
    "22日",
    "23日",
    "24日",
    "25日",
    "26日",
    "27日",
    "28日",
    "29日",
    "30日",
];

const requestQuotationData = [
    200, 445, 483, 503, 689, 692, 634, 589, 445, 483, 503, 689, 200, 445, 483,
    503, 689, 692, 634, 589, 445, 483, 503, 689, 200, 445, 483, 503, 200, 445,
];
const wordMouthData = [
    200, 465, 493, 478, 589, 632, 674, 639, 465, 493, 478, 200, 465, 493, 478,
    589, 632, 674, 639, 465, 493, 478, 589, 674, 639, 465, 493, 478, 493, 478,
];
const occupationData = [
    50, 200, 200, 250, 100, 240, 234, 321, 200, 237, 180, 50, 200, 200, 250,
    100, 240, 234, 321, 200, 237, 180, 50, 200, 200, 250, 100, 240, 234, 321,
];

/* bar chart 総計 */
const chBar = document.getElementById("chBar");
if (chBar) {
    new Chart(chBar, {
        type: "bar",
        data: {
            labels: label,
            datasets: [
                {
                    data: requestQuotationData,
                    backgroundColor: colors[0],
                },
                {
                    data: wordMouthData,
                    backgroundColor: colors[1],
                },
                {
                    data: occupationData,
                    backgroundColor: colors[2],
                },
            ],
        },
        options: {
            legend: {
                display: false,
            },
            scales: {
                xAxes: [
                    {
                        barPercentage: 1,
                        categoryPercentage: 0.5,
                    },
                ],
            },
        },
    });
}

/* function line chart */
function lineChart(elemt, data, color) {
    const chartData = {
        labels: label,
        datasets: [
            {
                data: data,
                backgroundColor: "transparent",
                borderColor: color,
                borderWidth: 2,
                pointBackgroundColor: color,
            },
        ],
    };
    if (elemt) {
        new Chart(elemt, {
            type: "line",
            data: chartData,
            options: {
                scales: {
                    xAxes: [
                        {
                            ticks: {
                                beginAtZero: false,
                            },
                        },
                    ],
                },
                legend: {
                    display: false,
                },
                responsive: true,
            },
        });
    }
}

const chLine1 = document.getElementById("chLine1");
const chLine2 = document.getElementById("chLine2");
const chLine3 = document.getElementById("chLine3");
lineChart(chLine1, requestQuotationData, colors[0]);
lineChart(chLine2, wordMouthData, colors[1]);
lineChart(chLine3, occupationData, colors[2]);
