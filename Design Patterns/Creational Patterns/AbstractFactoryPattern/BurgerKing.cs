using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AbstractFactoryPattern
{
    class BurgerKing : IRestaurant
    {
        public IBurger CreateBurger()
        {
            return new KingBurger();
        }

        public void CreateMilkshake()
        {
            throw new NotImplementedException();
        }
    }
}
