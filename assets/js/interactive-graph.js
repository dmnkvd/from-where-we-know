const width = window.innerWidth;
const height = window.innerHeight;

const svg = d3
  .select("#d3")
  .append("div")
  .classed("svg-container", true)
  .append("svg")
  // .attr("preserveAspectRatio", "xMinYMin meet")
  .attr("viewBox", `0 0 ${width} ${height}`)
  .classed("svg-content-responsive", true)
  .attr("width", width)
  .attr("height", height);

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
// let color = d3.scaleOrdinal(d3.schemeCategory20);

// TODO: implement hierarchy
// const root = d3.hierarchy(data);
// const links = root.links();
// const nodes = root.descendants();

let simulation = d3
  .forceSimulation()
  .force(
    "link",
    d3
      .forceLink()
      .id(function (d) {
        return d.id;
      })
      .distance(100)
  )
  .force("charge", d3.forceManyBody().strength(-2500))
  // center the force in the centre of the canvas
  .force("center", d3.forceCenter(width / 2, height / 2))
  // This force prevents collision
  .force("collide", d3.forceCollide().radius(20))
  .force("y", d3.forceY().strength(-0.1));

const graph = {
  nodes: [
    {
      id: "Centre",
    },
    {
      id: "Ocean Albin",
      group: "GD",
    },
    {
      id: "Sacha van Alfen",
      group: "GD",
    },
    {
      id: "Eunjin An",
      group: "GD",
    },
    {
      id: "Fabiola van den Berg",
      group: "GD",
    },
    {
      id: "Rafael Colmanetti",
      group: "GD",
    },
    {
      id: "Daniela Damaschin",
      group: "GD",
    },
    {
      id: "Radek Górniak",
      group: "GD",
    },
    {
      id: "Eva-Maria Horvath",
      group: "GD",
    },
    {
      id: "Handi Kim",
      group: "GD",
    },
    {
      id: "Eunji Lee",
      group: "GD",
    },
    {
      id: "Adriana Navarro Villacampa",
      group: "GD",
    },
    {
      id: "Karoliina Pärnänen",
      group: "GD",
    },
    {
      id: "Kilia Robustella",
      group: "GD",
    },
    {
      id: "Anke Sondi Rumohr",
      group: "GD",
    },
    {
      id: "Mika Schalks",
      group: "GD",
    },
    {
      id: "Malik Saib-Mezghiche",
      group: "GD",
    },
    {
      id: "Ian Scheufler",
      group: "GD",
    },
    {
      id: "Olga Elliot Schou",
      group: "GD",
    },
    {
      id: "Kristiana Marija Sproge",
      group: "GD",
    },
    {
      id: "Iana Abrasheva",
      group: "GD",
    },
    {
      id: "Ivi Apostolatos",
      group: "GD",
    },
    {
      id: "Emma Benozzi",
      group: "GD",
    },
    {
      id: "Ralph Bruens",
      group: "GD",
    },
    {
      id: "Isabelle Giacomelli",
      group: "GD",
    },
    {
      id: "Kexin Hao",
      group: "GD",
    },
    {
      id: "Linea Lan Cai Fabricius",
      group: "GD",
    },
    {
      id: "Merel Meijer",
      group: "GD",
    },
    {
      id: "Aurora Navarro Villacampa",
      group: "GD",
    },
    {
      id: "Michelle Janssen",
      group: "GD",
    },
    {
      id: "Tereza Nováková",
      group: "GD",
    },
    {
      id: "Soyun Park",
      group: "GD",
    },
    {
      id: "Ada Popowicz",
      group: "GD",
    },
    {
      id: "Vincent Rheinberger",
      group: "GD",
    },
    {
      id: "Sjors Rigters",
      group: "GD",
    },
    {
      id: "Aliz Soos",
      group: "GD",
    },
    {
      id: "Agata Markowska",
      group: "GD",
    },
    {
      id: "Dominik Vrabič Dežman",
      group: "GD",
    },
    {
      id: "Amanda Verberne",
      group: "GD",
    },
    {
      id: "Katie Baselj",
      group: "NLN",
    },
    {
      id: "Justine Corrijn",
      group: "NLN",
    },
    {
      id: "Sophie Czich",
      group: "NLN",
    },
    {
      id: "Dario Di Paolantonio",
      group: "NLN",
    },
    {
      id: "Esther van der Heijden",
      group: "NLN",
    },
    {
      id: "Tuana Inhan",
      group: "NLN",
    },
    {
      id: "Felix Meermann",
      group: "NLN",
    },
    {
      id: "Lance Laoyan",
      group: "NLN",
    },
    {
      id: "Marcin Liminowicz",
      group: "NLN",
    },
    {
      id: "Pablo Perez",
      group: "NLN",
    },
    {
      id: "Taya Reshetnik",
      group: "NLN",
    },
    {
      id: "Elinor Salomon",
      group: "NLN",
    },
    {
      id: "Natalia Śliwińska",
      group: "NLN",
    },
    {
      id: "Hattie Wade",
      group: "NLN",
    },
  ],
  links: [
    {
      source: "Centre",
      target: "Ocean Albin",
      value: 1,
    },
    {
      source: "Centre",
      target: "Sacha van Alfen",
      value: 1,
    },
    {
      source: "Centre",
      target: "Eunjin An",
      value: 1,
    },
    {
      source: "Centre",
      target: "Fabiola van den Berg",
      value: 1,
    },
    {
      source: "Centre",
      target: "Rafael Colmanetti",
      value: 1,
    },
    {
      source: "Centre",
      target: "Daniela Damaschin",
      value: 1,
    },
    {
      source: "Centre",
      target: "Radek Górniak",
      value: 1,
    },
    {
      source: "Centre",
      target: "Eva-Maria Horvath",
      value: 1,
    },
    {
      source: "Centre",
      target: "Handi Kim",
      value: 1,
    },
    {
      source: "Centre",
      target: "Eunji Lee",
      value: 1,
    },
    {
      source: "Centre",
      target: "Adriana Navarro Villacampa",
      value: 1,
    },
    {
      source: "Centre",
      target: "Karoliina Pärnänen",
      value: 1,
    },
    {
      source: "Centre",
      target: "Kilia Robustella",
      value: 1,
    },
    {
      source: "Centre",
      target: "Anke Sondi Rumohr",
      value: 1,
    },
    {
      source: "Centre",
      target: "Mika Schalks",
      value: 1,
    },
    {
      source: "Centre",
      target: "Malik Saib-Mezghiche",
      value: 1,
    },
    {
      source: "Centre",
      target: "Ian Scheufler",
      value: 1,
    },
    {
      source: "Centre",
      target: "Olga Elliot Schou",
      value: 1,
    },
    {
      source: "Centre",
      target: "Kristiana Marija Sproge",
      value: 1,
    },
    {
      source: "Centre",
      target: "Iana Abrasheva",
      value: 1,
    },
    {
      source: "Centre",
      target: "Ivi Apostolatos",
      value: 1,
    },
    {
      source: "Centre",
      target: "Emma Benozzi",
      value: 1,
    },
    {
      source: "Centre",
      target: "Ralph Bruens",
      value: 1,
    },
    {
      source: "Centre",
      target: "Isabelle Giacomelli",
      value: 1,
    },
    {
      source: "Centre",
      target: "Kexin Hao",
      value: 1,
    },
    {
      source: "Centre",
      target: "Linea Lan Cai Fabricius",
      value: 1,
    },
    {
      source: "Centre",
      target: "Merel Meijer",
      value: 1,
    },
    {
      source: "Centre",
      target: "Aurora Navarro Villacampa",
      value: 1,
    },
    {
      source: "Centre",
      target: "Michelle Janssen",
      value: 1,
    },
    {
      source: "Centre",
      target: "Tereza Nováková",
      value: 1,
    },
    {
      source: "Centre",
      target: "Soyun Park",
      value: 1,
    },
    {
      source: "Centre",
      target: "Ada Popowicz",
      value: 1,
    },
    {
      source: "Centre",
      target: "Vincent Rheinberger",
      value: 1,
    },
    {
      source: "Centre",
      target: "Sjors Rigters",
      value: 1,
    },
    {
      source: "Centre",
      target: "Aliz Soos",
      value: 1,
    },
    {
      source: "Centre",
      target: "Agata Markowska",
      value: 1,
    },
    {
      source: "Centre",
      target: "Dominik Vrabič Dežman",
      value: 1,
    },
    {
      source: "Centre",
      target: "Amanda Verberne",
      value: 1,
    },
    {
      source: "Centre",
      target: "Katie Baselj",
      value: 1,
    },
    {
      source: "Centre",
      target: "Justine Corrijn",
      value: 1,
    },
    {
      source: "Centre",
      target: "Sophie Czich",
      value: 1,
    },
    {
      source: "Centre",
      target: "Dario Di Paolantonio",
      value: 1,
    },
    {
      source: "Centre",
      target: "Esther van der Heijden",
      value: 1,
    },
    {
      source: "Centre",
      target: "Tuana Inhan",
      value: 1,
    },
    {
      source: "Centre",
      target: "Felix Meermann",
      value: 1,
    },
    {
      source: "Centre",
      target: "Lance Laoyan",
      value: 1,
    },
    {
      source: "Centre",
      target: "Marcin Liminowicz",
      value: 1,
    },
    {
      source: "Centre",
      target: "Taya Reshetnik",
      value: 1,
    },
    {
      source: "Centre",
      target: "Elinor Salomon",
      value: 1,
    },
    {
      source: "Centre",
      target: "Natalia Śliwińska",
      value: 1,
    },
    {
      source: "Centre",
      target: "Pablo Perez",
      value: 1,
    },
    {
      source: "Centre",
      target: "Hattie Wade",
      value: 1,
    },
  ],
};

let link = svg
  .append("g")
  .attr("class", "links")
  .selectAll("line")
  .data(graph.links)
  .enter()
  .append("line")

  // stroke wider for more connections
  .attr("stroke-width", function (d) {
    // return Math.sqrt(d.value);
    // stoke width of line
    return 1;
  })
  // dashed line
  .attr("stroke-dasharray", "10 10");

let node = svg
  .append("g")
  .attr("class", "nodes")
  .selectAll("g")
  .data(graph.nodes)
  .style("pointer-events", "none")
  .enter()
  .append("g");

//the clickable objects
let rectangles = node
  .append("rect")
  .style("pointer-events", "all")
  //Wiki works but its not clickable
  //.attr("xlink:href", "https://en.wikipedia.org/wiki/Shark")
  //this one is to extract them from JSON
  // .attr("xlink:href", function(d){return d.url;})
  // .style("fill", "lightgreen")
  .attr("x", 0)
  .attr("y", 1)
  .attr("width", (d) => {
    return d.id !== "Centre" ? 0 : 0;
  })
  .attr("height", (d) => {
    return d.id !== "Centre" ? 0 : 0;
  })
  .attr("rx", 5)
  .attr("fill", function (d) {
    return d.id !== "Centre" ? d.id : "none";
    // return color(d.group);
  });
// .call(
//   d3.drag().on("start", dragstarted).on("drag", dragged).on("end", dragended)
// );

let labels = node
  .append("text")
  .style("pointer-events", "none")
  .attr("text-anchor", "middle")
  .attr("x", 1)
  .attr("y", 22)
  .text(function (d) {
    return d.id !== "Centre" ? d.id : "";
  });

node.selectAll("rect").attr("width", function (d) {
  return this.parentNode.getBBox().width + 20;
});

node.selectAll("rect").attr("height", function (d) {
  return this.parentNode.getBBox().height;
});

node.selectAll("rect").attr("transform", function (d) {
  return `translate(-${this.width.baseVal.value / 2}, 0)`;
});

node.append("title").text(function (d) {
  return d.id;
});

// TODO: Send it to the persons' portfolio website link
node.on("click", function (d) {
  let url = `/${d.target
    .getAttribute("fill")
    .toLowerCase()
    .normalize("NFD")
    .replace(/[\u0300-\u036f]/g, "")
    .split(" ")
    .join("-")}`;
  // console.log(d);
  window.location.href = url;
  moveSelectedBubbles();
  // alert("You clicked on node " + d.id);
});

// TODO: when mouseover, do something
node.on("mouseover", function (d) {
  d3.select(this).style("background-color", "red");
});

simulation.nodes(graph.nodes).on("tick", ticked);

simulation.force("link").links(graph.links);

function ticked() {
  link
    .attr("x1", function (d) {
      return d.source.x;
    })
    .attr("y1", function (d) {
      return d.source.y;
    })
    .attr("x2", function (d) {
      return d.target.x;
    })
    .attr("y2", function (d) {
      return d.target.y;
    });

  node.attr("transform", function (d) {
    return "translate(" + d.x + "," + d.y + ")";
  });
}

// d3.json(jsonData, function (error, data) {
//   console.log(data); /* DEBUG */
// });

// d3.json("./assets/js/names.json", function (error, graph) {
//   if (error) throw error;

//   let link = svg
//     .append("g")
//     .attr("class", "links")
//     .selectAll("line")
//     .data(graph.links)
//     .enter()
//     .append("line")

//     // stroke wider for more connections
//     .attr("stroke-width", function (d) {
//       // return Math.sqrt(d.value);
//       // stoke width of line
//       return 1;
//     })
//     // dashed line
//     .attr("stroke-dasharray", "10 10");

//   let node = svg
//     .append("g")
//     .attr("class", "nodes")
//     .selectAll("g")
//     .data(graph.nodes)
//     .style("pointer-events", "none")
//     .enter()
//     .append("g");

//   //the clickable objects
//   let rectangles = node
//     .append("rect")
//     .style("pointer-events", "all")

//     //Wiki works but its not clickable
//     //.attr("xlink:href", "https://en.wikipedia.org/wiki/Shark")
//     //this one is to extract them from JSON
//     // .attr("xlink:href", function(d){return d.url;})
//     // .style("fill", "lightgreen")
//     .attr("x", 0)
//     .attr("y", 1)
//     .attr("width", (d) => {
//       return d.id !== "Centre" ? 0 : 0;
//     })
//     .attr("height", (d) => {
//       return d.id !== "Centre" ? 0 : 0;
//     })
//     .attr("rx", 5)
//     .attr("fill", function (d) {
//       return d.id !== "Centre" ? d.id : "none";
//       // return color(d.group);
//     })
//     .call(
//       d3
//         .drag()
//         .on("start", dragstarted)
//         .on("drag", dragged)
//         .on("end", dragended)
//     );

//   let labels = node
//     .append("text")
//     .style("pointer-events", "none")
//     .attr("text-anchor", "middle")
//     .attr("x", 1)
//     .attr("y", 22)
//     .text(function (d) {
//       return d.id !== "Centre" ? d.id : "";
//     });

//   node.selectAll("rect").attr("width", function (d) {
//     return this.parentNode.getBBox().width + 20;
//   });

//   node.selectAll("rect").attr("height", function (d) {
//     return this.parentNode.getBBox().height;
//   });

//   node.selectAll("rect").attr("transform", function (d) {
//     return `translate(-${this.width.baseVal.value / 2}, 0)`;
//   });

//   node.append("title").text(function (d) {
//     return d.id;
//   });

//   // TODO: Send it to the persons' portfolio website link
//   node.on("click", function (d) {
//     // console.log(d.url);
//     // window.location.href = d.url;
//     moveSelectedBubbles();
//     // alert("You clicked on node " + d.id);
//   });

//   // TODO: when mouseover, do something
//   node.on("mouseover", function (d) {
//     d3.select(this).style("background-color", "red");
//   });

//   simulation.nodes(graph.nodes).on("tick", ticked);

//   simulation.force("link").links(graph.links);

//   function ticked() {
//     link
//       .attr("x1", function (d) {
//         return d.source.x;
//       })
//       .attr("y1", function (d) {
//         return d.source.y;
//       })
//       .attr("x2", function (d) {
//         return d.target.x;
//       })
//       .attr("y2", function (d) {
//         return d.target.y;
//       });

//     node.attr("transform", function (d) {
//       return "translate(" + d.x + "," + d.y + ")";
//     });
//   }
// });

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
}

// moving the forcefield around
function moveSelectedBubbles() {
  simulation.force(
    "charge",
    d3.forceManyBody().strength((d) => {
      return -4000;
    })
  );
  setTimeout(() => {
    simulation.force("charge", d3.forceManyBody().strength(-2500));
  }, 200);
  simulation.alpha(0.1).restart();
}

// handle resizing

// window.addEventListener("resize", resize);

function resize(e) {
  // get width/height with container selector (body also works)
  // or use other method of calculating desired values
  var width = document.querySelector(".svg-container").innerWidth;
  var height = document.querySelector(".svg-container").innerHeigth;

  // set attrs and 'resume' force
  svg.attr("width", width);
  svg.attr("height", height);
  simulation.size([width, height]).resume();
}
