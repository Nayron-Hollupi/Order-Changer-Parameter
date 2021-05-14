<template>

  <div class="content">
    <header>
           <nav>
    <ol>
 
      <li>
        <b>Dashboard</b>
      </li>
    </ol>
  </nav>
    </header>
    <div class="md-layout">

      <div class="md-layout-item md-large-size-100 md-xlarge-size-100 md-size-100">
      
        <chart-card
          :chart-data="dailySalesChart.data"
          :chart-options="dailySalesChart.options"
          :chart-type="'Line'"
          data-background-color="blue"
        >   <template slot="content">
            <h4 class="title">Manutenção Corretiva</h4>
            <p class="category">
              <span class="text-success"
                ><i class="fas fa-long-arrow-alt-up"></i> 55%
              </span>
              increase in today sales.
            </p>
          </template>

        </chart-card>
      </div>

      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-50">
        <chart-card
          :chart-data="emailsSubscriptionChart.data"
          :chart-options="emailsSubscriptionChart.options"
          :chart-responsive-options="emailsSubscriptionChart.responsiveOptions"
          :chart-type="'Bar'"
          data-background-color="red"
        >
          <template slot="content">
            <h4 class="title">Previsão manutenção preventiva </h4>
            <p class="category">
              Last Campaign Performance
            </p>
          </template>

  
        </chart-card>
      </div>

      <div class="md-layout-item md-medium-size-100 md-xsmall-size-100 md-size-50" >
        <chart-card
          :chart-data="dataCompletedTasksChart.data"
          :chart-options="dataCompletedTasksChart.options"
          :chart-type="'Line'"
          data-background-color="green"
        >
          <template slot="content">
            <h4 class="title">Manutençã preventiva real</h4>
            <p class="category">
              Last Campaign Performance
            </p>
          </template>

    
        </chart-card>
      </div>

      <div  class="md-layout-item md-medium-size-50 md-xsmall-size-100 md-size-33" >
     
      </div>

     


      </div>
    </div>

</template>

<script>

import { ChartCard,} from "@/components";

export default {
  components: {
   
    ChartCard,
   
 
  },

  data() {
    return {
      dailySalesChart: {
        data: {
          labels: ["Ja", "Fe", "Ma", "Ab", "Ma", "Ju", "Jul","Ag", "Se", "Ou", "No", "De"],
          series: [[5, 13,20, 27, 15, 18, 38,55,8,9,50,2]]
          
        },
        options: {
          lineSmooth: this.$Chartist.Interpolation.cardinal({
            tension: 0
          }),
          low: 0,
          high: 100, 
          chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
          }
        }
      },
      dataCompletedTasksChart: {
        data: {
          labels: ["12am", "3pm", "6pm", "9pm", "12pm", "3am", "6am", "9am"],
          series: [[230, 750, 450, 300, 280, 240, 200, 190]]
        },

        options: {
          lineSmooth: this.$Chartist.Interpolation.cardinal({
            tension: 0
          }),
          low: 0,
          high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
          chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
          }
        }
      },
      emailsSubscriptionChart: {
        data: {
          labels: [
            "Ja",
            "Fe",
            "Ma",
            "Ap",
            "Mai",
            "Ju",
            "Jul",
            "Au",
            "Se",
            "Oc",
            "No",
            "De"
          ],
          series: [[542, 443, 320, 780, 553, 453, 326, 434, 568, 610, 756, 895]]
        },
        options: {
          axisX: {
            showGrid: false
          },
          low: 0,
          high: 1000,
          chartPadding: {
            top: 0,
            right: 5,
            bottom: 0,
            left: 0
          }
        },
        responsiveOptions: [
          [
            "screen and (max-width: 640px)",
            {
              seriesBarDistance: 5,
              axisX: {
                labelInterpolationFnc: function(value) {
                  return value[0];
                }
              }
            }
          ]
        ]
      }
    };
  }
};
</script>

<style scoped>
:root {
  background-color: #def;
  box-shadow: inset 0 0 7rem #fff, inset 0 0 3rem #fff;
  font: normal x-large/1 "Roboto Condensed", sans-serif;
  min-height: 100vh;
}

header {
  background-color: #000;
  color: #fff;
  font-size: .75rem;
  letter-spacing: .05em;
  text-transform: uppercase;
  margin: 0;
}

nav {
  display: table;
  overflow: hidden;
  width: 100%;
}

ol {
  display: table-row;
  list-style: none;
  text-align: center;
}

li {
  display: table-cell;
  vertical-align: middle;
  width: 33.33%;
}

a,
b {
  display: block;
  padding: 15px 0;
  position: relative;
  white-space: nowrap;
  
}

a::after {
  background-color: #000;
  border-radius: 0 0 0 48px;
  box-shadow: 3px -3px 0 3px #def;
  content: "";
  height: 48px;
  position: absolute;
  right: -24px;
  top: 0;
  transform: scale(.707) rotate(45deg);
  width: 48px;
  z-index: 1;
}

a,
a:link,
a:visited,
a:hover,
a:active,
a:focus {
  color: #fff;
  text-decoration: none;
}

a:hover,
a:hover::after {
  background-color: #3c3c3c;
}

b {
  background-color: #777;
  font: inherit;
}
</style>