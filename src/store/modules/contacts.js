import axios from "axios";

const state = {
  contacts: [],
  regions: [],
  property: [],
};

const getters = {
  allContacts: (state) => state.contacts,
  allRegions: (state) => state.regions,
  allProperty: (state) => state.property,
};
const actions = {
  async getResults({ commit }, title) {
    const response = await axios.get(
      `http://178.128.177.194/taskjob/public/getdata?name=${title}`
    );

    commit("setContacts", response.data.data);
    commit("setRegions", response.data.data);
    commit("setProperty", response.data.data);
  },
};
const mutations = {
  setContacts: (state, result) => (state.contacts = result.contact),
  setRegions: (state, result) => (state.regions = result.region),
  setProperty: (state, result) => (state.property = result.property),
};

export default {
  state,
  getters,
  actions,
  mutations,
};
