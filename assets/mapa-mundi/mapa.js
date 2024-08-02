async function runWorldMap() {
    const am5Ready = await am5.ready(function () {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


        // Create the map chart
        // https://www.amcharts.com/docs/v5/charts/map-chart/
        var chart = root.container.children.push(am5map.MapChart.new(root, {
            panX: "none",
            panY: "none",
            wheelX: "none",
            wheelY: "none",
            pinchZoom: false,
            projection: am5map.geoMercator()
        }));


        // Create main polygon series for countries
        // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
        var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow,
            exclude: ["AQ"]
        }));

        polygonSeries.mapPolygons.template.setAll({
            tooltipText: "{name}",
            toggleKey: "active",
            interactive: true
        });

        polygonSeries.mapPolygons.template.setAll({
            tooltipText: "{name}",
            templateField: "polygonSettings"
        });

        // polygonSeries.mapPolygons.template.states.create("hover", {
        //     fill: am5.color(0x0E1D40),
        //     fillOpacity: 1
        // });

        polygonSeries.mapPolygons.template.setAll({
            fill: am5.color(0x084d6e),
            fillOpacity: 0.5
        });

        polygonSeries.data.setAll([{
            id: "CA",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "CN",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "MM",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "VN",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "MY",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "SG",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "IN",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "SO",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "OM",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "RU",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "BY",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "IR",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "IL",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "EG",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "KW",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "SA",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "QA",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "AE",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "MX",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "GQ",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "VE",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "TT",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "SV",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "CO",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "AG",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }, {
            id: "US",
            polygonSettings: {
                fill: am5.color(0x0E1D40),
                fillOpacity: 1
            }
        }])

        var colors = am5.ColorSet.new(root, {});

        // Set clicking on "water" to zoom out
        chart.chartContainer.get("background").events.on("click", function () {
            chart.goHome();
        })


        // Make stuff animate on load
        chart.appear(1000, 100);

    }); // end am5.ready()

} runWorldMap()