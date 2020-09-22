<template>
  <div>
    <div class="text-bold text-2xl">Your Coordinates:</div>

    <p>Latitude: {{ coordinates.lat }}</p>
    <p>Longtitude: {{ coordinates.lng }}</p>

    <gmap-map :center="{lat: 14.426690, lng: 120.974073}" :zoom="20" class="w-full h-screen mt-5"></gmap-map>
  </div>
</template>

<script>
export default {
  data() {
    return {
      coordinates: {
        lat: 0,
        lng: 0,
      },
    };
  },

  created() {
    this.$getLocation({})
      .then((coordinates) => (this.coordinates = coordinates))
      .catch((error) => alert(error));
  },
};
</script>