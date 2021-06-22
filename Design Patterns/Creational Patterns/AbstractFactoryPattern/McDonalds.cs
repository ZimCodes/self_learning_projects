using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AbstractFactoryPattern
{
    class McDonalds : IRestaurant
    {

        public void CreateMilkshake()
        {
            throw new NotImplementedException();
        }

        public IBurger CreateBurger()
        {
            throw new NotImplementedException();
        }
    }
}
