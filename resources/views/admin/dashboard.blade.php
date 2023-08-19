@extends('layouts.admin.app')

<div class="row">
    <div class="col-xxl-6 col-lg-6 col-md-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-top justify-content-between">
                    <div>
                        <span class="avatar avatar-md avatar-rounded bg-primary">
                            <i class="ti ti-users fs-16"></i>
                        </span>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p class="text-muted mb-0">Total Customers</p>
                                <h4 class="fw-semibold mt-1">1,02,890</h4>
                            </div>
                            <div id="crm-total-customers" style="min-height: 40px;">
                                <div id="apexchartsjb0afj6r"
                                    class="apexcharts-canvas apexchartsjb0afj6r apexcharts-theme-light"
                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg1912" width="100"
                                        height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1914" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1913">
                                                <clipPath id="gridRectMaskjb0afj6r">
                                                    <rect id="SvgjsRect1919" width="105.5" height="41.5"
                                                        x="-2.75" y="-0.75" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskjb0afj6r"></clipPath>
                                                <clipPath id="nonForecastMaskjb0afj6r"></clipPath>
                                                <clipPath id="gridRectMarkerMaskjb0afj6r">
                                                    <rect id="SvgjsRect1920" width="104" height="44"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1925" x1="0"
                                                    y1="1" x2="1" y2="1">
                                                    <stop id="SvgjsStop1926" stop-opacity="0.9"
                                                        stop-color="rgba(66,45,112,0.9)" offset="0"></stop>
                                                    <stop id="SvgjsStop1927" stop-opacity="0.9"
                                                        stop-color="rgba(132,90,223,0.9)" offset="0.98"></stop>
                                                    <stop id="SvgjsStop1928" stop-opacity="0.9"
                                                        stop-color="rgba(132,90,223,0.9)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1918" x1="0" y1="0" x2="0"
                                                y2="40" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                y="0" width="1" height="40" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1930" class="apexcharts-grid">
                                                <g id="SvgjsG1931" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1944" x1="0" y1="4"
                                                        x2="100" y2="4" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1945" x1="0" y1="8"
                                                        x2="100" y2="8" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1946" x1="0" y1="12"
                                                        x2="100" y2="12" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1947" x1="0" y1="16"
                                                        x2="100" y2="16" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1948" x1="0" y1="20"
                                                        x2="100" y2="20" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1949" x1="0" y1="24"
                                                        x2="100" y2="24" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1950" x1="0" y1="28"
                                                        x2="100" y2="28" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1951" x1="0" y1="32"
                                                        x2="100" y2="32" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1952" x1="0" y1="36"
                                                        x2="100" y2="36" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1932" class="apexcharts-gridlines-vertical"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1934" x1="0" y1="0"
                                                        x2="0" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1935" x1="12.5" y1="0"
                                                        x2="12.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1936" x1="25" y1="0"
                                                        x2="25" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1937" x1="37.5" y1="0"
                                                        x2="37.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1938" x1="50" y1="0"
                                                        x2="50" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1939" x1="62.5" y1="0"
                                                        x2="62.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1940" x1="75" y1="0"
                                                        x2="75" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1941" x1="87.5" y1="0"
                                                        x2="87.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1942" x1="100" y1="0"
                                                        x2="100" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <line id="SvgjsLine1955" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1954" x1="0" y1="1"
                                                    x2="0" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1933" class="apexcharts-grid-borders"
                                                style="display: none;">
                                                <line id="SvgjsLine1943" x1="0" y1="0"
                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1953" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1921" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG1922" class="apexcharts-series" seriesName="Value"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1929"
                                                        d="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                        fill="none" fill-opacity="1"
                                                        stroke="url(#SvgjsLinearGradient1925)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="1.5" stroke-dasharray="0"
                                                        class="apexcharts-line" index="0"
                                                        clip-path="url(#gridRectMaskjb0afj6r)"
                                                        pathTo="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                        pathFrom="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1923" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1924" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1956" x1="0" y1="0" x2="100"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1957" x1="0" y1="0" x2="100"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1958" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1959" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1960" class="apexcharts-point-annotations"></g>
                                            <g id="SvgjsG1961" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1962" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1915" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG1972" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <rect id="SvgjsRect1917" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div>
                                <a class="text-primary" href="javascript:void(0);">View All<i
                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 text-success fw-semibold">+40%</p>
                                <span class="text-muted op-7 fs-11">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6 col-md-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-top justify-content-between">
                    <div>
                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                            <i class="ti ti-wallet fs-16"></i>
                        </span>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p class="text-muted mb-0">Total Revenue</p>
                                <h4 class="fw-semibold mt-1">$56,562</h4>
                            </div>
                            <div id="crm-total-revenue" style="min-height: 40px;">
                                <div id="apexchartsktqc4ozdi"
                                    class="apexcharts-canvas apexchartsktqc4ozdi apexcharts-theme-light"
                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg1973" width="100"
                                        height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1975" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1974">
                                                <clipPath id="gridRectMaskktqc4ozdi">
                                                    <rect id="SvgjsRect1980" width="105.5" height="41.5"
                                                        x="-2.75" y="-0.75" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskktqc4ozdi"></clipPath>
                                                <clipPath id="nonForecastMaskktqc4ozdi"></clipPath>
                                                <clipPath id="gridRectMarkerMaskktqc4ozdi">
                                                    <rect id="SvgjsRect1981" width="104" height="44"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1986" x1="0"
                                                    y1="1" x2="1" y2="1">
                                                    <stop id="SvgjsStop1987" stop-opacity="0.9"
                                                        stop-color="rgba(18,92,115,0.9)" offset="0"></stop>
                                                    <stop id="SvgjsStop1988" stop-opacity="0.9"
                                                        stop-color="rgba(35,183,229,0.9)" offset="0.98"></stop>
                                                    <stop id="SvgjsStop1989" stop-opacity="0.9"
                                                        stop-color="rgba(35,183,229,0.9)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1979" x1="0" y1="0" x2="0"
                                                y2="40" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                y="0" width="1" height="40" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG1991" class="apexcharts-grid">
                                                <g id="SvgjsG1992" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2005" x1="0" y1="4"
                                                        x2="100" y2="4" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2006" x1="0" y1="8"
                                                        x2="100" y2="8" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2007" x1="0" y1="12"
                                                        x2="100" y2="12" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2008" x1="0" y1="16"
                                                        x2="100" y2="16" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2009" x1="0" y1="20"
                                                        x2="100" y2="20" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2010" x1="0" y1="24"
                                                        x2="100" y2="24" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2011" x1="0" y1="28"
                                                        x2="100" y2="28" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2012" x1="0" y1="32"
                                                        x2="100" y2="32" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2013" x1="0" y1="36"
                                                        x2="100" y2="36" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1993" class="apexcharts-gridlines-vertical"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1995" x1="0" y1="0"
                                                        x2="0" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1996" x1="12.5" y1="0"
                                                        x2="12.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1997" x1="25" y1="0"
                                                        x2="25" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1998" x1="37.5" y1="0"
                                                        x2="37.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1999" x1="50" y1="0"
                                                        x2="50" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2000" x1="62.5" y1="0"
                                                        x2="62.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2001" x1="75" y1="0"
                                                        x2="75" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2002" x1="87.5" y1="0"
                                                        x2="87.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2003" x1="100" y1="0"
                                                        x2="100" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <line id="SvgjsLine2016" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2015" x1="0" y1="1"
                                                    x2="0" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1994" class="apexcharts-grid-borders"
                                                style="display: none;">
                                                <line id="SvgjsLine2004" x1="0" y1="0"
                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2014" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1982" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG1983" class="apexcharts-series" seriesName="Value"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1990"
                                                        d="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                        fill="none" fill-opacity="1"
                                                        stroke="url(#SvgjsLinearGradient1986)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="1.5" stroke-dasharray="0"
                                                        class="apexcharts-line" index="0"
                                                        clip-path="url(#gridRectMaskktqc4ozdi)"
                                                        pathTo="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG1984" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG1985" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine2017" x1="0" y1="0" x2="100"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2018" x1="0" y1="0" x2="100"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2019" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2020" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2021" class="apexcharts-point-annotations"></g>
                                            <g id="SvgjsG2022" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2023" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1976" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG2033" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <rect id="SvgjsRect1978" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div>
                                <a class="text-secondary" href="javascript:void(0);">View All<i
                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 text-success fw-semibold">+25%</p>
                                <span class="text-muted op-7 fs-11">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6 col-md-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-top justify-content-between">
                    <div>
                        <span class="avatar avatar-md avatar-rounded bg-success">
                            <i class="ti ti-wave-square fs-16"></i>
                        </span>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p class="text-muted mb-0">Conversion Ratio</p>
                                <h4 class="fw-semibold mt-1">12.08%</h4>
                            </div>
                            <div id="crm-conversion-ratio" style="min-height: 40px;">
                                <div id="apexchartskry0isg3"
                                    class="apexcharts-canvas apexchartskry0isg3 apexcharts-theme-light"
                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg2034" width="100"
                                        height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2036" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2035">
                                                <clipPath id="gridRectMaskkry0isg3">
                                                    <rect id="SvgjsRect2041" width="105.5" height="41.5"
                                                        x="-2.75" y="-0.75" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskkry0isg3"></clipPath>
                                                <clipPath id="nonForecastMaskkry0isg3"></clipPath>
                                                <clipPath id="gridRectMarkerMaskkry0isg3">
                                                    <rect id="SvgjsRect2042" width="104" height="44"
                                                        x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2047" x1="0"
                                                    y1="1" x2="1" y2="1">
                                                    <stop id="SvgjsStop2048" stop-opacity="0.9"
                                                        stop-color="rgba(19,96,74,0.9)" offset="0"></stop>
                                                    <stop id="SvgjsStop2049" stop-opacity="0.9"
                                                        stop-color="rgba(38,191,148,0.9)" offset="0.98"></stop>
                                                    <stop id="SvgjsStop2050" stop-opacity="0.9"
                                                        stop-color="rgba(38,191,148,0.9)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine2040" x1="0" y1="0" x2="0"
                                                y2="40" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                y="0" width="1" height="40" fill="#b1b9c4"
                                                filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2052" class="apexcharts-grid">
                                                <g id="SvgjsG2053" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2066" x1="0" y1="4"
                                                        x2="100" y2="4" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2067" x1="0" y1="8"
                                                        x2="100" y2="8" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2068" x1="0" y1="12"
                                                        x2="100" y2="12" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2069" x1="0" y1="16"
                                                        x2="100" y2="16" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2070" x1="0" y1="20"
                                                        x2="100" y2="20" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2071" x1="0" y1="24"
                                                        x2="100" y2="24" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2072" x1="0" y1="28"
                                                        x2="100" y2="28" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2073" x1="0" y1="32"
                                                        x2="100" y2="32" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2074" x1="0" y1="36"
                                                        x2="100" y2="36" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2054" class="apexcharts-gridlines-vertical"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2056" x1="0" y1="0"
                                                        x2="0" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2057" x1="12.5" y1="0"
                                                        x2="12.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2058" x1="25" y1="0"
                                                        x2="25" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2059" x1="37.5" y1="0"
                                                        x2="37.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2060" x1="50" y1="0"
                                                        x2="50" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2061" x1="62.5" y1="0"
                                                        x2="62.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2062" x1="75" y1="0"
                                                        x2="75" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2063" x1="87.5" y1="0"
                                                        x2="87.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2064" x1="100" y1="0"
                                                        x2="100" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <line id="SvgjsLine2077" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2076" x1="0" y1="1"
                                                    x2="0" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2055" class="apexcharts-grid-borders"
                                                style="display: none;">
                                                <line id="SvgjsLine2065" x1="0" y1="0"
                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2075" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2043"
                                                class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG2044" class="apexcharts-series" seriesName="Value"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2051"
                                                        d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                                        fill="none" fill-opacity="1"
                                                        stroke="url(#SvgjsLinearGradient2047)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="1.5"
                                                        stroke-dasharray="0" class="apexcharts-line"
                                                        index="0" clip-path="url(#gridRectMaskkry0isg3)"
                                                        pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG2045" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG2046" class="apexcharts-datalabels"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2078" x1="0" y1="0"
                                                x2="100" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2079" x1="0" y1="0"
                                                x2="100" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2080" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2081" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2082" class="apexcharts-point-annotations"></g>
                                            <g id="SvgjsG2083" class="apexcharts-xaxis"
                                                transform="translate(0, 0)">
                                                <g id="SvgjsG2084" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2037" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG2094" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <rect id="SvgjsRect2039" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div>
                                <a class="text-success" href="javascript:void(0);">View All<i
                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 text-danger fw-semibold">-12%</p>
                                <span class="text-muted op-7 fs-11">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-lg-6 col-md-6">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="d-flex align-items-top justify-content-between">
                    <div>
                        <span class="avatar avatar-md avatar-rounded bg-warning">
                            <i class="ti ti-briefcase fs-16"></i>
                        </span>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div>
                                <p class="text-muted mb-0">Total Deals</p>
                                <h4 class="fw-semibold mt-1">2,543</h4>
                            </div>
                            <div id="crm-total-deals" style="min-height: 40px;">
                                <div id="apexcharts8k8ihorll"
                                    class="apexcharts-canvas apexcharts8k8ihorll apexcharts-theme-light"
                                    style="width: 100px; height: 40px;"><svg id="SvgjsSvg2095" width="100"
                                        height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG2097" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2096">
                                                <clipPath id="gridRectMask8k8ihorll">
                                                    <rect id="SvgjsRect2102" width="105.5" height="41.5"
                                                        x="-2.75" y="-0.75" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask8k8ihorll"></clipPath>
                                                <clipPath id="nonForecastMask8k8ihorll"></clipPath>
                                                <clipPath id="gridRectMarkerMask8k8ihorll">
                                                    <rect id="SvgjsRect2103" width="104" height="44"
                                                        x="-2" y="-2" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient2108" x1="0"
                                                    y1="1" x2="1" y2="1">
                                                    <stop id="SvgjsStop2109" stop-opacity="0.9"
                                                        stop-color="rgba(123,92,37,0.9)" offset="0"></stop>
                                                    <stop id="SvgjsStop2110" stop-opacity="0.9"
                                                        stop-color="rgba(245,184,73,0.9)" offset="0.98"></stop>
                                                    <stop id="SvgjsStop2111" stop-opacity="0.9"
                                                        stop-color="rgba(245,184,73,0.9)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine2101" x1="0" y1="0"
                                                x2="0" y2="40" stroke="#b6b6b6"
                                                stroke-dasharray="3" stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="40" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2113" class="apexcharts-grid">
                                                <g id="SvgjsG2114" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2127" x1="0" y1="4"
                                                        x2="100" y2="4" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2128" x1="0" y1="8"
                                                        x2="100" y2="8" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2129" x1="0" y1="12"
                                                        x2="100" y2="12" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2130" x1="0" y1="16"
                                                        x2="100" y2="16" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2131" x1="0" y1="20"
                                                        x2="100" y2="20" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2132" x1="0" y1="24"
                                                        x2="100" y2="24" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2133" x1="0" y1="28"
                                                        x2="100" y2="28" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2134" x1="0" y1="32"
                                                        x2="100" y2="32" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2135" x1="0" y1="36"
                                                        x2="100" y2="36" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2115" class="apexcharts-gridlines-vertical"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2117" x1="0" y1="0"
                                                        x2="0" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2118" x1="12.5" y1="0"
                                                        x2="12.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2119" x1="25" y1="0"
                                                        x2="25" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2120" x1="37.5" y1="0"
                                                        x2="37.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2121" x1="50" y1="0"
                                                        x2="50" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2122" x1="62.5" y1="0"
                                                        x2="62.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2123" x1="75" y1="0"
                                                        x2="75" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2124" x1="87.5" y1="0"
                                                        x2="87.5" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2125" x1="100" y1="0"
                                                        x2="100" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <line id="SvgjsLine2138" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2137" x1="0" y1="1"
                                                    x2="0" y2="40" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2116" class="apexcharts-grid-borders"
                                                style="display: none;">
                                                <line id="SvgjsLine2126" x1="0" y1="0"
                                                    x2="100" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2136" x1="0" y1="40"
                                                    x2="100" y2="40" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2104"
                                                class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG2105" class="apexcharts-series" seriesName="Value"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2112"
                                                        d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                        fill="none" fill-opacity="1"
                                                        stroke="url(#SvgjsLinearGradient2108)" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="1.5"
                                                        stroke-dasharray="0" class="apexcharts-line"
                                                        index="0" clip-path="url(#gridRectMask8k8ihorll)"
                                                        pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                        fill-rule="evenodd"></path>
                                                    <g id="SvgjsG2106" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <g id="SvgjsG2107" class="apexcharts-datalabels"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2139" x1="0" y1="0"
                                                x2="100" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2140" x1="0" y1="0"
                                                x2="100" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2141" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2142" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2143" class="apexcharts-point-annotations"></g>
                                            <g id="SvgjsG2144" class="apexcharts-xaxis"
                                                transform="translate(0, 0)">
                                                <g id="SvgjsG2145" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2098" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG2155" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <rect id="SvgjsRect2100" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div>
                                <a class="text-warning" href="javascript:void(0);">View All<i
                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 text-success fw-semibold">+19%</p>
                                <span class="text-muted op-7 fs-11">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Revenue Analytics
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="crm-revenue-analytics" style="min-height: 365px;">
                    <div id="apexcharts063i74bu" class="apexcharts-canvas apexcharts063i74bu apexcharts-theme-light"
                        style="width: 609px; height: 350px;"><svg id="SvgjsSvg2159" width="609"
                            height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <foreignObject x="0" y="0" width="609" height="350">
                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                    xmlns="http://www.w3.org/1999/xhtml"
                                    style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                    <div class="apexcharts-legend-series" rel="3" seriesname="Sales"
                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                            class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                            style="background: rgba(119, 119, 142, 0.05) !important; color: rgba(119, 119, 142, 0.05); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                            class="apexcharts-legend-text" rel="3" i="2"
                                            data:default-text="Sales" data:collapsed="false"
                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                    </div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="Revenue"
                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                            class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                            style="background: rgba(35, 183, 229, 0.85) !important; color: rgba(35, 183, 229, 0.85); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                            class="apexcharts-legend-text" rel="2" i="1"
                                            data:default-text="Revenue" data:collapsed="false"
                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                    </div>
                                    <div class="apexcharts-legend-series" rel="1" seriesname="Profit"
                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                            class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                            style="background: rgb(132, 90, 223) !important; color: rgb(132, 90, 223); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                            class="apexcharts-legend-text" rel="1" i="0"
                                            data:default-text="Profit" data:collapsed="false"
                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Profit</span>
                                    </div>
                                </div>
                                <style type="text/css">
                                    .apexcharts-legend {
                                        display: flex;
                                        overflow: auto;
                                        padding: 0 10px;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom,
                                    .apexcharts-legend.apx-legend-position-top {
                                        flex-wrap: wrap
                                    }

                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        flex-direction: column;
                                        bottom: 0;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                    .apexcharts-legend.apx-legend-position-right,
                                    .apexcharts-legend.apx-legend-position-left {
                                        justify-content: flex-start;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                        justify-content: center;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                        justify-content: flex-end;
                                    }

                                    .apexcharts-legend-series {
                                        cursor: pointer;
                                        line-height: normal;
                                    }

                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                        display: flex;
                                        align-items: center;
                                    }

                                    .apexcharts-legend-text {
                                        position: relative;
                                        font-size: 14px;
                                    }

                                    .apexcharts-legend-text *,
                                    .apexcharts-legend-marker * {
                                        pointer-events: none;
                                    }

                                    .apexcharts-legend-marker {
                                        position: relative;
                                        display: inline-block;
                                        cursor: pointer;
                                        margin-right: 3px;
                                        border-style: solid;
                                    }

                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                        display: inline-block;
                                    }

                                    .apexcharts-legend-series.apexcharts-no-click {
                                        cursor: auto;
                                    }

                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                        display: none !important;
                                    }

                                    .apexcharts-inactive-legend {
                                        opacity: 0.45;
                                    }
                                </style>
                            </foreignObject><text id="SvgjsText2163" font-family="Helvetica, Arial, sans-serif"
                                x="10" y="0" text-anchor="start" dominant-baseline="auto"
                                font-size=".8125rem" font-weight="semibold" fill="#8c9097"
                                class="apexcharts-title-text"
                                style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Revenue Analytics with
                                sales &amp; profit (USD)</text>
                            <rect id="SvgjsRect2166" width="0" height="0" x="0"
                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG2162" class="apexcharts-annotations"></g>
                            <g id="SvgjsG2289" class="apexcharts-yaxis" rel="0"
                                transform="translate(27.59375, 0)">
                                <g id="SvgjsG2290" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2292"
                                        font-family="Helvetica, Arial, sans-serif" x="20" y="51.5"
                                        text-anchor="end" dominant-baseline="auto" font-size="11px"
                                        font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan2293">$1000</tspan>
                                        <title>$1000</title>
                                    </text><text id="SvgjsText2295" font-family="Helvetica, Arial, sans-serif"
                                        x="20" y="100.3696" text-anchor="end" dominant-baseline="auto"
                                        font-size="11px" font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan2296">$800</tspan>
                                        <title>$800</title>
                                    </text><text id="SvgjsText2298" font-family="Helvetica, Arial, sans-serif"
                                        x="20" y="149.2392" text-anchor="end" dominant-baseline="auto"
                                        font-size="11px" font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan2299">$600</tspan>
                                        <title>$600</title>
                                    </text><text id="SvgjsText2301" font-family="Helvetica, Arial, sans-serif"
                                        x="20" y="198.10880000000003" text-anchor="end"
                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                        fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan2302">$400</tspan>
                                        <title>$400</title>
                                    </text><text id="SvgjsText2304" font-family="Helvetica, Arial, sans-serif"
                                        x="20" y="246.97840000000002" text-anchor="end"
                                        dominant-baseline="auto" font-size="11px" font-weight="400"
                                        fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan2305">$200</tspan>
                                        <title>$200</title>
                                    </text><text id="SvgjsText2307" font-family="Helvetica, Arial, sans-serif"
                                        x="20" y="295.848" text-anchor="end" dominant-baseline="auto"
                                        font-size="11px" font-weight="400" fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label "
                                        style="font-family: Helvetica, Arial, sans-serif;">
                                        <tspan id="SvgjsTspan2308">$0</tspan>
                                        <title>$0</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG2161" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(57.59375, 50)">
                                <defs id="SvgjsDefs2160">
                                    <clipPath id="gridRectMask063i74bu">
                                        <rect id="SvgjsRect2168" width="535.734375" height="246.348"
                                            x="-3" y="-1" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMask063i74bu"></clipPath>
                                    <clipPath id="nonForecastMask063i74bu"></clipPath>
                                    <clipPath id="gridRectMarkerMask063i74bu">
                                        <rect id="SvgjsRect2169" width="533.734375" height="248.348"
                                            x="-2" y="-2" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fff"></rect>
                                    </clipPath>
                                    <filter id="SvgjsFilter2175" filterUnits="userSpaceOnUse" width="200%"
                                        height="200%" x="-50%" y="-50%">
                                        <feFlood id="SvgjsFeFlood2176" flood-color="#000000" flood-opacity="0.1"
                                            result="SvgjsFeFlood2176Out" in="SourceGraphic"></feFlood>
                                        <feComposite id="SvgjsFeComposite2177" in="SvgjsFeFlood2176Out"
                                            in2="SourceAlpha" operator="in" result="SvgjsFeComposite2177Out">
                                        </feComposite>
                                        <feOffset id="SvgjsFeOffset2178" dx="0" dy="8"
                                            result="SvgjsFeOffset2178Out" in="SvgjsFeComposite2177Out"></feOffset>
                                        <feGaussianBlur id="SvgjsFeGaussianBlur2179" stdDeviation="3 "
                                            result="SvgjsFeGaussianBlur2179Out" in="SvgjsFeOffset2178Out">
                                        </feGaussianBlur>
                                        <feMerge id="SvgjsFeMerge2180" result="SvgjsFeMerge2180Out"
                                            in="SourceGraphic">
                                            <feMergeNode id="SvgjsFeMergeNode2181" in="SvgjsFeGaussianBlur2179Out">
                                            </feMergeNode>
                                            <feMergeNode id="SvgjsFeMergeNode2182" in="[object Arguments]">
                                            </feMergeNode>
                                        </feMerge>
                                        <feBlend id="SvgjsFeBlend2183" in="SourceGraphic"
                                            in2="SvgjsFeMerge2180Out" mode="normal" result="SvgjsFeBlend2183Out">
                                        </feBlend>
                                    </filter>
                                    <filter id="SvgjsFilter2185" filterUnits="userSpaceOnUse" width="200%"
                                        height="200%" x="-50%" y="-50%">
                                        <feFlood id="SvgjsFeFlood2186" flood-color="#000000" flood-opacity="0.1"
                                            result="SvgjsFeFlood2186Out" in="SourceGraphic"></feFlood>
                                        <feComposite id="SvgjsFeComposite2187" in="SvgjsFeFlood2186Out"
                                            in2="SourceAlpha" operator="in" result="SvgjsFeComposite2187Out">
                                        </feComposite>
                                        <feOffset id="SvgjsFeOffset2188" dx="0" dy="8"
                                            result="SvgjsFeOffset2188Out" in="SvgjsFeComposite2187Out"></feOffset>
                                        <feGaussianBlur id="SvgjsFeGaussianBlur2189" stdDeviation="3 "
                                            result="SvgjsFeGaussianBlur2189Out" in="SvgjsFeOffset2188Out">
                                        </feGaussianBlur>
                                        <feMerge id="SvgjsFeMerge2190" result="SvgjsFeMerge2190Out"
                                            in="SourceGraphic">
                                            <feMergeNode id="SvgjsFeMergeNode2191" in="SvgjsFeGaussianBlur2189Out">
                                            </feMergeNode>
                                            <feMergeNode id="SvgjsFeMergeNode2192" in="[object Arguments]">
                                            </feMergeNode>
                                        </feMerge>
                                        <feBlend id="SvgjsFeBlend2193" in="SourceGraphic"
                                            in2="SvgjsFeMerge2190Out" mode="normal" result="SvgjsFeBlend2193Out">
                                        </feBlend>
                                    </filter>
                                    <filter id="SvgjsFilter2199" filterUnits="userSpaceOnUse" width="200%"
                                        height="200%" x="-50%" y="-50%">
                                        <feFlood id="SvgjsFeFlood2200" flood-color="#000000" flood-opacity="0.1"
                                            result="SvgjsFeFlood2200Out" in="SourceGraphic"></feFlood>
                                        <feComposite id="SvgjsFeComposite2201" in="SvgjsFeFlood2200Out"
                                            in2="SourceAlpha" operator="in" result="SvgjsFeComposite2201Out">
                                        </feComposite>
                                        <feOffset id="SvgjsFeOffset2202" dx="0" dy="8"
                                            result="SvgjsFeOffset2202Out" in="SvgjsFeComposite2201Out"></feOffset>
                                        <feGaussianBlur id="SvgjsFeGaussianBlur2203" stdDeviation="3 "
                                            result="SvgjsFeGaussianBlur2203Out" in="SvgjsFeOffset2202Out">
                                        </feGaussianBlur>
                                        <feMerge id="SvgjsFeMerge2204" result="SvgjsFeMerge2204Out"
                                            in="SourceGraphic">
                                            <feMergeNode id="SvgjsFeMergeNode2205" in="SvgjsFeGaussianBlur2203Out">
                                            </feMergeNode>
                                            <feMergeNode id="SvgjsFeMergeNode2206" in="[object Arguments]">
                                            </feMergeNode>
                                        </feMerge>
                                        <feBlend id="SvgjsFeBlend2207" in="SourceGraphic"
                                            in2="SvgjsFeMerge2204Out" mode="normal" result="SvgjsFeBlend2207Out">
                                        </feBlend>
                                    </filter>
                                    <filter id="SvgjsFilter2212" filterUnits="userSpaceOnUse" width="200%"
                                        height="200%" x="-50%" y="-50%">
                                        <feFlood id="SvgjsFeFlood2213" flood-color="#000000" flood-opacity="0.1"
                                            result="SvgjsFeFlood2213Out" in="SourceGraphic"></feFlood>
                                        <feComposite id="SvgjsFeComposite2214" in="SvgjsFeFlood2213Out"
                                            in2="SourceAlpha" operator="in" result="SvgjsFeComposite2214Out">
                                        </feComposite>
                                        <feOffset id="SvgjsFeOffset2215" dx="0" dy="8"
                                            result="SvgjsFeOffset2215Out" in="SvgjsFeComposite2214Out"></feOffset>
                                        <feGaussianBlur id="SvgjsFeGaussianBlur2216" stdDeviation="3 "
                                            result="SvgjsFeGaussianBlur2216Out" in="SvgjsFeOffset2215Out">
                                        </feGaussianBlur>
                                        <feMerge id="SvgjsFeMerge2217" result="SvgjsFeMerge2217Out"
                                            in="SourceGraphic">
                                            <feMergeNode id="SvgjsFeMergeNode2218" in="SvgjsFeGaussianBlur2216Out">
                                            </feMergeNode>
                                            <feMergeNode id="SvgjsFeMergeNode2219" in="[object Arguments]">
                                            </feMergeNode>
                                        </feMerge>
                                        <feBlend id="SvgjsFeBlend2220" in="SourceGraphic"
                                            in2="SvgjsFeMerge2217Out" mode="normal" result="SvgjsFeBlend2220Out">
                                        </feBlend>
                                    </filter>
                                </defs>
                                <line id="SvgjsLine2167" x1="0" y1="0" x2="0"
                                    y2="244.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                    height="244.348" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                    stroke-width="1"></line>
                                <g id="SvgjsG2221" class="apexcharts-grid">
                                    <g id="SvgjsG2222" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine2238" x1="0" y1="48.869600000000005"
                                            x2="529.734375" y2="48.869600000000005" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2239" x1="0" y1="97.73920000000001"
                                            x2="529.734375" y2="97.73920000000001" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2240" x1="0" y1="146.60880000000003"
                                            x2="529.734375" y2="146.60880000000003" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2241" x1="0" y1="195.47840000000002"
                                            x2="529.734375" y2="195.47840000000002" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG2223" class="apexcharts-gridlines-vertical">
                                        <line id="SvgjsLine2225" x1="0" y1="0" x2="0"
                                            y2="244.348" stroke="#f1f1f1" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2226" x1="48.15767045454545" y1="0"
                                            x2="48.15767045454545" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2227" x1="96.3153409090909" y1="0"
                                            x2="96.3153409090909" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2228" x1="144.47301136363637" y1="0"
                                            x2="144.47301136363637" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2229" x1="192.6306818181818" y1="0"
                                            x2="192.6306818181818" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2230" x1="240.78835227272725" y1="0"
                                            x2="240.78835227272725" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2231" x1="288.9460227272727" y1="0"
                                            x2="288.9460227272727" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2232" x1="337.10369318181813" y1="0"
                                            x2="337.10369318181813" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2233" x1="385.26136363636357" y1="0"
                                            x2="385.26136363636357" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2234" x1="433.419034090909" y1="0"
                                            x2="433.419034090909" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2235" x1="481.57670454545445" y1="0"
                                            x2="481.57670454545445" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine2236" x1="529.7343749999999" y1="0"
                                            x2="529.7343749999999" y2="244.348" stroke="#f1f1f1"
                                            stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine2244" x1="0" y1="244.348" x2="529.734375"
                                        y2="244.348" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                    <line id="SvgjsLine2243" x1="0" y1="1" x2="0"
                                        y2="244.348" stroke="transparent" stroke-dasharray="0"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG2224" class="apexcharts-grid-borders">
                                    <line id="SvgjsLine2237" x1="0" y1="0" x2="529.734375"
                                        y2="0" stroke="#f1f1f1" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2242" x1="0" y1="244.348" x2="529.734375"
                                        y2="244.348" stroke="#f1f1f1" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine2288" x1="0" y1="245.348" x2="529.734375"
                                        y2="245.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG2170" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG2171" class="apexcharts-series" seriesName="Sales"
                                        data:longestSeries="true" rel="1" data:realIndex="2">
                                        <path id="SvgjsPath2174"
                                            d="M 0 244.348 L 0 195.47840000000002C 16.855184659090906 195.47840000000002 31.302485795454547 114.84356 48.15767045454545 114.84356C 65.01285511363636 114.84356 79.46015625 217.46972 96.3153409090909 217.46972C 113.17052556818182 217.46972 127.61782670454546 212.58276 144.47301136363637 212.58276C 161.32819602272727 212.58276 175.77549715909092 127.06096 192.6306818181818 127.06096C 209.48586647727274 127.06096 223.93316761363636 117.28703999999999 240.78835227272728 117.28703999999999C 257.6435369318182 117.28703999999999 272.0908380681818 53.75655999999998 288.94602272727275 53.75655999999998C 305.80120738636367 53.75655999999998 320.24850852272726 138.05662 337.1036931818182 138.05662C 353.9588778409091 138.05662 368.4061789772727 128.28269999999998 385.2613636363636 128.28269999999998C 402.11654829545455 128.28269999999998 416.5638494318182 64.01917599999999 433.4190340909091 64.01917599999999C 450.27421875000005 64.01917599999999 464.72151988636364 133.414008 481.57670454545456 133.414008C 498.4318892045455 133.414008 512.8791903409091 127.06096 529.734375 127.06096C 529.734375 127.06096 529.734375 127.06096 529.734375 244.348M 529.734375 127.06096z"
                                            fill="rgba(119, 119, 142, 0.05)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="2"
                                            clip-path="url(#gridRectMask063i74bu)" filter="url(#SvgjsFilter2175)"
                                            pathTo="M 0 244.348 L 0 195.47840000000002C 16.855184659090906 195.47840000000002 31.302485795454547 114.84356 48.15767045454545 114.84356C 65.01285511363636 114.84356 79.46015625 217.46972 96.3153409090909 217.46972C 113.17052556818182 217.46972 127.61782670454546 212.58276 144.47301136363637 212.58276C 161.32819602272727 212.58276 175.77549715909092 127.06096 192.6306818181818 127.06096C 209.48586647727274 127.06096 223.93316761363636 117.28703999999999 240.78835227272728 117.28703999999999C 257.6435369318182 117.28703999999999 272.0908380681818 53.75655999999998 288.94602272727275 53.75655999999998C 305.80120738636367 53.75655999999998 320.24850852272726 138.05662 337.1036931818182 138.05662C 353.9588778409091 138.05662 368.4061789772727 128.28269999999998 385.2613636363636 128.28269999999998C 402.11654829545455 128.28269999999998 416.5638494318182 64.01917599999999 433.4190340909091 64.01917599999999C 450.27421875000005 64.01917599999999 464.72151988636364 133.414008 481.57670454545456 133.414008C 498.4318892045455 133.414008 512.8791903409091 127.06096 529.734375 127.06096C 529.734375 127.06096 529.734375 127.06096 529.734375 244.348M 529.734375 127.06096z"
                                            pathFrom="M 0 244.348 L 0 195.47840000000002C 21.850639204545452 195.47840000000002 40.579758522727275 114.84356 62.43039772727273 114.84356C 84.28103693181818 114.84356 103.01015625 217.46972 124.86079545454545 217.46972C 146.7114346590909 217.46972 165.44055397727274 212.58276 187.2911931818182 212.58276C 209.14183238636363 212.58276 227.87095170454546 127.06096 249.7215909090909 127.06096C 271.57223011363635 127.06096 290.30134943181815 117.28703999999999 312.1519886363636 117.28703999999999C 334.0026278409091 117.28703999999999 352.7317471590909 53.75655999999998 374.5823863636364 53.75655999999998C 396.4330255681818 53.75655999999998 415.16214488636365 138.05662 437.01278409090907 138.05662C 458.86342329545454 138.05662 477.59254261363634 128.28269999999998 499.4431818181818 128.28269999999998C 521.2938210227272 128.28269999999998 540.022940340909 64.01917599999999 561.8735795454545 64.01917599999999C 583.72421875 64.01917599999999 602.4533380681818 133.414008 624.3039772727273 133.414008C 646.1546164772727 133.414008 664.8837357954545 127.06096 686.734375 127.06096C 686.734375 127.06096 686.734375 127.06096 686.734375 244.348M 686.734375 127.06096z">
                                        </path>
                                        <path id="SvgjsPath2184"
                                            d="M 0 195.47840000000002C 16.855184659090906 195.47840000000002 31.302485795454547 114.84356 48.15767045454545 114.84356C 65.01285511363636 114.84356 79.46015625 217.46972 96.3153409090909 217.46972C 113.17052556818182 217.46972 127.61782670454546 212.58276 144.47301136363637 212.58276C 161.32819602272727 212.58276 175.77549715909092 127.06096 192.6306818181818 127.06096C 209.48586647727274 127.06096 223.93316761363636 117.28703999999999 240.78835227272728 117.28703999999999C 257.6435369318182 117.28703999999999 272.0908380681818 53.75655999999998 288.94602272727275 53.75655999999998C 305.80120738636367 53.75655999999998 320.24850852272726 138.05662 337.1036931818182 138.05662C 353.9588778409091 138.05662 368.4061789772727 128.28269999999998 385.2613636363636 128.28269999999998C 402.11654829545455 128.28269999999998 416.5638494318182 64.01917599999999 433.4190340909091 64.01917599999999C 450.27421875000005 64.01917599999999 464.72151988636364 133.414008 481.57670454545456 133.414008C 498.4318892045455 133.414008 512.8791903409091 127.06096 529.734375 127.06096"
                                            fill="none" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="2"
                                            clip-path="url(#gridRectMask063i74bu)" filter="url(#SvgjsFilter2185)"
                                            pathTo="M 0 195.47840000000002C 16.855184659090906 195.47840000000002 31.302485795454547 114.84356 48.15767045454545 114.84356C 65.01285511363636 114.84356 79.46015625 217.46972 96.3153409090909 217.46972C 113.17052556818182 217.46972 127.61782670454546 212.58276 144.47301136363637 212.58276C 161.32819602272727 212.58276 175.77549715909092 127.06096 192.6306818181818 127.06096C 209.48586647727274 127.06096 223.93316761363636 117.28703999999999 240.78835227272728 117.28703999999999C 257.6435369318182 117.28703999999999 272.0908380681818 53.75655999999998 288.94602272727275 53.75655999999998C 305.80120738636367 53.75655999999998 320.24850852272726 138.05662 337.1036931818182 138.05662C 353.9588778409091 138.05662 368.4061789772727 128.28269999999998 385.2613636363636 128.28269999999998C 402.11654829545455 128.28269999999998 416.5638494318182 64.01917599999999 433.4190340909091 64.01917599999999C 450.27421875000005 64.01917599999999 464.72151988636364 133.414008 481.57670454545456 133.414008C 498.4318892045455 133.414008 512.8791903409091 127.06096 529.734375 127.06096"
                                            pathFrom="M 0 195.47840000000002C 21.850639204545452 195.47840000000002 40.579758522727275 114.84356 62.43039772727273 114.84356C 84.28103693181818 114.84356 103.01015625 217.46972 124.86079545454545 217.46972C 146.7114346590909 217.46972 165.44055397727274 212.58276 187.2911931818182 212.58276C 209.14183238636363 212.58276 227.87095170454546 127.06096 249.7215909090909 127.06096C 271.57223011363635 127.06096 290.30134943181815 117.28703999999999 312.1519886363636 117.28703999999999C 334.0026278409091 117.28703999999999 352.7317471590909 53.75655999999998 374.5823863636364 53.75655999999998C 396.4330255681818 53.75655999999998 415.16214488636365 138.05662 437.01278409090907 138.05662C 458.86342329545454 138.05662 477.59254261363634 128.28269999999998 499.4431818181818 128.28269999999998C 521.2938210227272 128.28269999999998 540.022940340909 64.01917599999999 561.8735795454545 64.01917599999999C 583.72421875 64.01917599999999 602.4533380681818 133.414008 624.3039772727273 133.414008C 646.1546164772727 133.414008 664.8837357954545 127.06096 686.734375 127.06096"
                                            fill-rule="evenodd"></path>
                                        <g id="SvgjsG2172" class="apexcharts-series-markers-wrap"
                                            data:realIndex="2">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle2309" r="0" cx="0"
                                                    cy="0" class="apexcharts-marker w9fead5gc"
                                                    stroke="#ffffff" fill="rgba(119, 119, 142, 0.05)"
                                                    fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                    default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG2194" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG2195" class="apexcharts-series" seriesName="Profit"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath2198"
                                            d="M 0 219.91320000000002C 16.855184659090906 219.91320000000002 31.302485795454547 193.03492 48.15767045454545 193.03492C 65.01285511363636 193.03492 79.46015625 200.36536 96.3153409090909 200.36536C 113.17052556818182 200.36536 127.61782670454546 133.414008 144.47301136363637 133.414008C 161.32819602272727 133.414008 175.77549715909092 188.14796 192.6306818181818 188.14796C 209.48586647727274 188.14796 223.93316761363636 166.15664 240.78835227272728 166.15664C 257.6435369318182 166.15664 272.0908380681818 84.055712 288.94602272727275 84.055712C 305.80120738636367 84.055712 320.24850852272726 41.53915999999998 337.1036931818182 41.53915999999998C 353.9588778409091 41.53915999999998 368.4061789772727 158.8262 385.2613636363636 158.8262C 402.11654829545455 158.8262 416.5638494318182 158.8262 433.4190340909091 158.8262C 450.27421875000005 158.8262 464.72151988636364 193.03492 481.57670454545456 193.03492C 498.4318892045455 193.03492 512.8791903409091 144.16532 529.734375 144.16532"
                                            fill="none" fill-opacity="1" stroke="rgba(132,90,223, 1)"
                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                            clip-path="url(#gridRectMask063i74bu)" filter="url(#SvgjsFilter2199)"
                                            pathTo="M 0 219.91320000000002C 16.855184659090906 219.91320000000002 31.302485795454547 193.03492 48.15767045454545 193.03492C 65.01285511363636 193.03492 79.46015625 200.36536 96.3153409090909 200.36536C 113.17052556818182 200.36536 127.61782670454546 133.414008 144.47301136363637 133.414008C 161.32819602272727 133.414008 175.77549715909092 188.14796 192.6306818181818 188.14796C 209.48586647727274 188.14796 223.93316761363636 166.15664 240.78835227272728 166.15664C 257.6435369318182 166.15664 272.0908380681818 84.055712 288.94602272727275 84.055712C 305.80120738636367 84.055712 320.24850852272726 41.53915999999998 337.1036931818182 41.53915999999998C 353.9588778409091 41.53915999999998 368.4061789772727 158.8262 385.2613636363636 158.8262C 402.11654829545455 158.8262 416.5638494318182 158.8262 433.4190340909091 158.8262C 450.27421875000005 158.8262 464.72151988636364 193.03492 481.57670454545456 193.03492C 498.4318892045455 193.03492 512.8791903409091 144.16532 529.734375 144.16532"
                                            pathFrom="M 0 219.91320000000002C 21.850639204545452 219.91320000000002 40.579758522727275 193.03492 62.43039772727273 193.03492C 84.28103693181818 193.03492 103.01015625 200.36536 124.86079545454545 200.36536C 146.7114346590909 200.36536 165.44055397727274 133.414008 187.2911931818182 133.414008C 209.14183238636363 133.414008 227.87095170454546 188.14796 249.7215909090909 188.14796C 271.57223011363635 188.14796 290.30134943181815 166.15664 312.1519886363636 166.15664C 334.0026278409091 166.15664 352.7317471590909 84.055712 374.5823863636364 84.055712C 396.4330255681818 84.055712 415.16214488636365 41.53915999999998 437.01278409090907 41.53915999999998C 458.86342329545454 41.53915999999998 477.59254261363634 158.8262 499.4431818181818 158.8262C 521.2938210227272 158.8262 540.022940340909 158.8262 561.8735795454545 158.8262C 583.72421875 158.8262 602.4533380681818 193.03492 624.3039772727273 193.03492C 646.1546164772727 193.03492 664.8837357954545 144.16532 686.734375 144.16532"
                                            fill-rule="evenodd"></path>
                                        <g id="SvgjsG2196" class="apexcharts-series-markers-wrap"
                                            data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle2310" r="0" cx="0"
                                                    cy="0" class="apexcharts-marker wudq27ryy"
                                                    stroke="#ffffff" fill="rgba(132,90,223, 1)" fill-opacity="1"
                                                    stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                </circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2208" class="apexcharts-series" seriesName="Revenue"
                                        data:longestSeries="true" rel="2" data:realIndex="1">
                                        <path id="SvgjsPath2211"
                                            d="M 0 200.36536C 16.855184659090906 200.36536 31.302485795454547 92.85224 48.15767045454545 92.85224C 65.01285511363636 92.85224 79.46015625 128.038352 96.3153409090909 128.038352C 113.17052556818182 128.038352 127.61782670454546 190.59144 144.47301136363637 190.59144C 161.32819602272727 190.59144 175.77549715909092 117.28703999999999 192.6306818181818 117.28703999999999C 209.48586647727274 117.28703999999999 223.93316761363636 53.75655999999998 240.78835227272728 53.75655999999998C 257.6435369318182 53.75655999999998 272.0908380681818 138.05662 288.94602272727275 138.05662C 305.80120738636367 138.05662 320.24850852272726 118.50878 337.1036931818182 118.50878C 353.9588778409091 118.50878 368.4061789772727 64.01917599999999 385.2613636363636 64.01917599999999C 402.11654829545455 64.01917599999999 416.5638494318182 133.414008 433.4190340909091 133.414008C 450.27421875000005 133.414008 464.72151988636364 116.06530000000001 481.57670454545456 116.06530000000001C 498.4318892045455 116.06530000000001 512.8791903409091 188.14796 529.734375 188.14796"
                                            fill="none" fill-opacity="1" stroke="rgba(35, 183, 229, 0.85)"
                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                            stroke-dasharray="5" class="apexcharts-line" index="1"
                                            clip-path="url(#gridRectMask063i74bu)" filter="url(#SvgjsFilter2212)"
                                            pathTo="M 0 200.36536C 16.855184659090906 200.36536 31.302485795454547 92.85224 48.15767045454545 92.85224C 65.01285511363636 92.85224 79.46015625 128.038352 96.3153409090909 128.038352C 113.17052556818182 128.038352 127.61782670454546 190.59144 144.47301136363637 190.59144C 161.32819602272727 190.59144 175.77549715909092 117.28703999999999 192.6306818181818 117.28703999999999C 209.48586647727274 117.28703999999999 223.93316761363636 53.75655999999998 240.78835227272728 53.75655999999998C 257.6435369318182 53.75655999999998 272.0908380681818 138.05662 288.94602272727275 138.05662C 305.80120738636367 138.05662 320.24850852272726 118.50878 337.1036931818182 118.50878C 353.9588778409091 118.50878 368.4061789772727 64.01917599999999 385.2613636363636 64.01917599999999C 402.11654829545455 64.01917599999999 416.5638494318182 133.414008 433.4190340909091 133.414008C 450.27421875000005 133.414008 464.72151988636364 116.06530000000001 481.57670454545456 116.06530000000001C 498.4318892045455 116.06530000000001 512.8791903409091 188.14796 529.734375 188.14796"
                                            pathFrom="M 0 200.36536C 21.850639204545452 200.36536 40.579758522727275 92.85224 62.43039772727273 92.85224C 84.28103693181818 92.85224 103.01015625 128.038352 124.86079545454545 128.038352C 146.7114346590909 128.038352 165.44055397727274 190.59144 187.2911931818182 190.59144C 209.14183238636363 190.59144 227.87095170454546 117.28703999999999 249.7215909090909 117.28703999999999C 271.57223011363635 117.28703999999999 290.30134943181815 53.75655999999998 312.1519886363636 53.75655999999998C 334.0026278409091 53.75655999999998 352.7317471590909 138.05662 374.5823863636364 138.05662C 396.4330255681818 138.05662 415.16214488636365 118.50878 437.01278409090907 118.50878C 458.86342329545454 118.50878 477.59254261363634 64.01917599999999 499.4431818181818 64.01917599999999C 521.2938210227272 64.01917599999999 540.022940340909 133.414008 561.8735795454545 133.414008C 583.72421875 133.414008 602.4533380681818 116.06530000000001 624.3039772727273 116.06530000000001C 646.1546164772727 116.06530000000001 664.8837357954545 188.14796 686.734375 188.14796"
                                            fill-rule="evenodd"></path>
                                        <g id="SvgjsG2209" class="apexcharts-series-markers-wrap"
                                            data:realIndex="1">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle2311" r="0" cx="0"
                                                    cy="0" class="apexcharts-marker wgx62b8mk"
                                                    stroke="#ffffff" fill="rgba(35, 183, 229, 0.85)"
                                                    fill-opacity="1" stroke-width="2" stroke-opacity="0.9"
                                                    default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG2173" class="apexcharts-datalabels" data:realIndex="2"></g>
                                    <g id="SvgjsG2197" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG2210" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine2245" x1="0" y1="0" x2="529.734375"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2246" x1="0" y1="0" x2="529.734375"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG2247" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG2248" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG2249" class="apexcharts-point-annotations"></g>
                                <g id="SvgjsG2250" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG2251" class="apexcharts-xaxis-texts-g"
                                        transform="translate(0, -4)"><text id="SvgjsText2253"
                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                            y="273.348" text-anchor="middle" dominant-baseline="auto"
                                            font-size="12px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2254">Jan</tspan>
                                            <title>Jan</title>
                                        </text><text id="SvgjsText2256" font-family="Helvetica, Arial, sans-serif"
                                            x="48.15767045454546" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2257">Feb</tspan>
                                            <title>Feb</title>
                                        </text><text id="SvgjsText2259" font-family="Helvetica, Arial, sans-serif"
                                            x="96.3153409090909" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2260">Mar</tspan>
                                            <title>Mar</title>
                                        </text><text id="SvgjsText2262" font-family="Helvetica, Arial, sans-serif"
                                            x="144.47301136363637" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2263">Apr</tspan>
                                            <title>Apr</title>
                                        </text><text id="SvgjsText2265" font-family="Helvetica, Arial, sans-serif"
                                            x="192.63068181818184" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2266">May</tspan>
                                            <title>May</title>
                                        </text><text id="SvgjsText2268" font-family="Helvetica, Arial, sans-serif"
                                            x="240.78835227272728" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2269">Jun</tspan>
                                            <title>Jun</title>
                                        </text><text id="SvgjsText2271" font-family="Helvetica, Arial, sans-serif"
                                            x="288.9460227272727" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2272">Jul</tspan>
                                            <title>Jul</title>
                                        </text><text id="SvgjsText2274" font-family="Helvetica, Arial, sans-serif"
                                            x="337.10369318181813" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2275">Aug</tspan>
                                            <title>Aug</title>
                                        </text><text id="SvgjsText2277" font-family="Helvetica, Arial, sans-serif"
                                            x="385.26136363636357" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2278">Sep</tspan>
                                            <title>Sep</title>
                                        </text><text id="SvgjsText2280" font-family="Helvetica, Arial, sans-serif"
                                            x="433.419034090909" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2281">Oct</tspan>
                                            <title>Oct</title>
                                        </text><text id="SvgjsText2283" font-family="Helvetica, Arial, sans-serif"
                                            x="481.57670454545445" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2284">Nov</tspan>
                                            <title>Nov</title>
                                        </text><text id="SvgjsText2286" font-family="Helvetica, Arial, sans-serif"
                                            x="529.7343749999999" y="273.348" text-anchor="middle"
                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                            fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2287">Dec</tspan>
                                            <title>Dec</title>
                                        </text></g>
                                </g>
                                <rect id="SvgjsRect2312" width="0" height="0" x="0"
                                    y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                    class="apexcharts-zoom-rect"></rect>
                                <rect id="SvgjsRect2313" width="0" height="0" x="0"
                                    y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                    class="apexcharts-selection-rect"></rect>
                            </g>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(132, 90, 223);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgba(35, 183, 229, 0.85);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgba(119, 119, 142, 0.05);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                        <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                            <div class="apexcharts-zoomin-icon" title="Zoom In"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="apexcharts-zoomout-icon" title="Zoom Out"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24"
                                    viewBox="0 0 24 24" width="24">
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                    </path>
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                </svg></div>
                            <div class="apexcharts-pan-icon" title="Panning"><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                    <defs>
                                        <path d="M0 0h24v24H0z" id="a"></path>
                                    </defs>
                                    <clipPath id="b">
                                        <use overflow="visible" xlink:href="#a"></use>
                                    </clipPath>
                                    <path clip-path="url(#b)"
                                        d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z">
                                    </path>
                                </svg></div>
                            <div class="apexcharts-reset-icon" title="Reset Zoom"><svg fill="#000000"
                                    height="24" viewBox="0 0 24 24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                </svg></div>
                            <div class="apexcharts-menu-icon" title="Menu"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                </svg></div>
                            <div class="apexcharts-menu">
                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
