<template>
  <div class="container">
    <p
      class="alert"
      v-if="
        allContacts.length === 0 &&
          allProperty.length === 0 &&
          allRegions.length === 0
      "
    >
      Please Enter a keyword to search
    </p>
    <h2 v-if="allContacts.length > 0" class="rr-head">Contacts</h2>
    <div class="row">
      <div v-for="elem in allContacts" :key="elem.id" class="col s12 m6 l4 mb">
        <div class="card contact-cards">
          <div class="card-image">
            <img
              v-if="elem.photos == 65768"
              class="responsive-img"
              src="./../imges/1.jpg"
            />
            <img
              v-if="elem.photos != 65768"
              class="responsive-img"
              v-bind:src="elem.photos"
            />
          </div>
          <div class="card-content">
            <table>
              <tr>
                <th class="ttl-head">First Name :</th>
                <td class="ttl-para">{{ elem.first_name }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Last Name :</th>
                <td class="ttl-para">{{ elem.last_name }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Email :</th>
                <td class="ttl-para">{{ elem.email }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Phone :</th>
                <td class="ttl-para">{{ elem.phone }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <h2 v-if="allProperty.length > 0" class="rr-head">Properties</h2>
    <div class="row">
      <div v-for="elem in allProperty" :key="elem.id" class="col s12 m6 l4 mb">
        <div class="card contact-cards">
          <div class="card-image">
            <img class="responsive-img" v-bind:src="elem.img" />
          </div>
          <div class="card-content">
            <table>
              <tr>
                <th class="ttl-head">Name :</th>
                <td class="ttl-para">{{ elem.name }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Address :</th>
                <td class="ttl-para">{{ elem.address }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Subrub :</th>
                <td class="ttl-para">{{ elem.suburd }}</td>
              </tr>
              <tr>
                <th class="ttl-head">State :</th>
                <td class="ttl-para">{{ elem.state }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Region :</th>
                <td class="ttl-para">{{ elem.region_id }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Country :</th>
                <td class="ttl-para">{{ elem.country }}</td>
              </tr>
              <tr>
                <th class="ttl-head">Country ID :</th>
                <td class="ttl-para">{{ elem.contact_id }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <h2 v-if="allRegions.length > 0" class="rr-head">Regions</h2>
    <div class="region-last">
      <div v-for="elem in allRegions" :key="elem.id" class="card region-cards">
        <div class="card-content">
          <div class="iic-icon">
            <span class="material-icons location-ic">location_on</span>
          </div>
          <h4 class="loc">{{ elem.name }}</h4>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "Table",
  computed: {
    ...mapGetters(["allContacts", "allRegions", "allProperty"]),
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.region-last {
  display: flex;
  flex-wrap: wrap;
}
th.ttl-head {
  white-space: nowrap;
}
td.ttl-para {
  word-break: break-all;
}
.heading {
  font-size: 20px;
  word-break: break-all;
}
.row {
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 20px;
  /* display: flex;
  flex-wrap: wrap; */
}
.card {
  height: 100%;
  margin-bottom: 15px;
}
.card .card-image img {
  height: 200px;
  object-fit: cover;
}
.region {
  padding: 1rem;
  border: 1px solid rgb(211, 210, 210);
}
.mb {
  margin-bottom: 2rem;
}
.card.region-cards {
  width: 180px;
  text-align: center;
  margin-right: 15px;
}
.location-ic {
  font-size: 49px;
}
.rr-head:before {
  content: "";
  position: absolute;
  border-bottom: 7px solid #ff5353;
  width: 90px;
  bottom: -12px;
}
.rr-head {
  position: relative;
}
.region-cards {
  min-height: 225px;
}
.loc {
  font-size: 20px;
}
.alert {
  text-align: center;
  font-size: 30px;
}
@media only screen and (max-width: 432px) {
  .region-last[data-v-783f90ce] {
    justify-content: center;
  }
  .card.region-cards[data-v-783f90ce] {
    width: 100%;
  }
}
</style>
