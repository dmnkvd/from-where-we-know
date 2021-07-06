"use strict";

var width = window.innerWidth;
var height = window.innerHeight;
var svg = d3.select("#d3").append("div").classed("svg-container", true).append("svg") // .attr("preserveAspectRatio", "xMinYMin meet")
.attr("viewBox", "0 0 ".concat(width, " ").concat(height)).classed("svg-content-responsive", true).attr("width", width).attr("height", height);
var svgWidth = document.querySelector(".svg-container").getBoundingClientRect().width;
var svgHeight = document.querySelector(".svg-container").getBoundingClientRect().height;
/*-----------------------/
  TODO:
   - isolate individual nodes forces
   - 
   - 
   - 
  ------------------------*/
// let svg = d3.select("svg"),
//   width = +svg.attr("width"),
//   height = +svg.attr("height");
// this draws the color palette from d3s 20-palette default category
// this sets the colour

var color = d3.scaleOrdinal(d3.schemeCategory20); // TODO: implement hierarchy
// const root = d3.hierarchy(data);
// const links = root.links();
// const nodes = root.descendants();

var simulation = d3.forceSimulation().force("link", d3.forceLink().id(function (d) {
  return d.id;
}).distance(300)).force("charge", d3.forceManyBody().strength(-1000)) // center the force in the centre of the canvas
.force("center", d3.forceCenter(width / 2, height / 2)) // This force prevents collision
.force("collide", d3.forceCollide().radius(60)); // .force("y", d3.forceY().strength(0.3));

d3.json("names.json", function (error, graph) {
  if (error) throw error;
  var link = svg.append("g").attr("class", "links").selectAll("line").data(graph.links).enter().append("line") // stroke wider for more connections
  .attr("stroke-width", function (d) {
    // return Math.sqrt(d.value);
    // stoke width of line
    return 1;
  }) // dashed line
  .attr("stroke-dasharray", "10 10");
  var node = svg.append("g").attr("class", "nodes").selectAll("g").data(graph.nodes).enter().append("g");
  var rectangles = node.append("rect").attr("x", 0).attr("y", 1).attr("width", function (d) {
    return d.id !== "Centre" ? 10 : 0;
  }).attr("height", function (d) {
    return d.id !== "Centre" ? 10 : 0;
  }).attr("rx", 5).attr("fill", function (d) {
    return d.id !== "Centre" ? d.id : "none"; // return color(d.group);
  }).call(d3.drag().on("start", dragstarted).on("drag", dragged).on("end", dragended));
  var labels = node.append("text").attr("text-anchor", "middle").attr("x", 1).attr("y", 25).text(function (d) {
    return d.id !== "Centre" ? d.id : "";
  });
  node.selectAll("rect").attr("width", function (d) {
    return this.parentNode.getBBox().width + 20;
  });
  node.selectAll("rect").attr("height", function (d) {
    return this.parentNode.getBBox().height + 3;
  });
  node.selectAll("rect").attr("transform", function (d) {
    return "translate(-".concat(this.width.baseVal.value / 2, ", 0)");
  });
  node.append("title").text(function (d) {
    return d.id;
  }); // TODO: Send it to the persons' portfolio website link

  node.on("click", function (d) {
    console.log(d);
    moveSelectedBubbles(); // alert("You clicked on node " + d.id);
  }); // TODO: when mouseover, do something

  node.on("mouseover", function (d) {
    d3.select(this).style("background-color", "red");
  });
  simulation.nodes(graph.nodes).on("tick", ticked);
  simulation.force("link").links(graph.links);

  function ticked() {
    link.attr("x1", function (d) {
      return d.source.x;
    }).attr("y1", function (d) {
      return d.source.y;
    }).attr("x2", function (d) {
      return d.target.x;
    }).attr("y2", function (d) {
      return d.target.y;
    });
    node.attr("transform", function (d) {
      return "translate(" + d.x + "," + d.y + ")";
    });
  }
});

function dragstarted(d) {
  if (!d3.event.active) simulation.alphaTarget(0.3).restart();
  d.fx = d.x;
  d.fy = d.y;
}

function dragged(d) {
  d.fx = d3.event.x;
  d.fy = d3.event.y;
}

function dragended(d) {
  if (!d3.event.active) simulation.alphaTarget(0);
  d.fx = null;
  d.fy = null;
} // moving the forcefield around


function moveSelectedBubbles() {
  simulation.force("charge", d3.forceManyBody().strength(function (d) {
    return -4000;
  }));
  setTimeout(function () {
    simulation.force("charge", d3.forceManyBody().strength(-2500));
  }, 200);
  simulation.alpha(0.1).restart();
} // handle resizing
// window.addEventListener("resize", resize);
// window.addEventListener("resize", resize);


function resize() {
  svgWidth = document.querySelector(".svg-container").clientWidth;
  svgHeight = document.querySelector(".svg-container").clientHeight;
  var winWidth = window.innerWidth;
  var winHeight = window.innerHeight;
  svg.attr("width", winWidth).attr("height", winHeight);
  console.log(1000 + winWidth * 0.01);
  simulation.force("charge", d3.forceManyBody().strength(-1000 + winWidth * 0.05)) // center the force in the centre of the canvas
  .force("center", d3.forceCenter(winWidth / 2, winHeight / 2)) // This force prevents collision
  .force("collide", d3.forceCollide().radius(10)).force("y", d3.forceY().strength(0.3)).alpha(0.1).restart();
} // function resize(e) {
//   // get width/height with container selector (body also works)
//   // or use other method of calculating desired values
//   var width = document.querySelector(".svg-container").innerWidth;
//   var height = document.querySelector(".svg-container").innerHeigth;
//   // set attrs and 'resume' force
//   svg.attr("width", width);
//   svg.attr("height", height);
//   simulation.size([width, height]).resume();
// }