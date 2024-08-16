import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-4-map-coordinates', IndexField)
  app.component('detail-nova-4-map-coordinates', DetailField)
  app.component('form-nova-4-map-coordinates', FormField)
})
