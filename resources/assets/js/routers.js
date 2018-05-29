
import FormMail from './components/FormMail.vue';
import SuccessMail from './components/SuccessMail';
export default  [
  {
      name: 'FormMail',
      path: '/email/form',
      component: FormMail
  },
  {
  	  name:'SuccessMail',
  	  path:'/email/success',
  	  component: SuccessMail
  }
 
];
