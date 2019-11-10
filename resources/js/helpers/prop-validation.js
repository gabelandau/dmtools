const GameList = {
  games: {
    default: () => {
      return [{ name: '', campaign: '', rule_set: '', status: '' }]
    },
    validator: arr => {
      return arr.length >= 0 &&
        'name' in arr[0] &&
        'campaign' in arr[0] &&
        'rule_set' in arr[0] &&
        'status' in arr[0]
    }
  }
}

export { GameList }
