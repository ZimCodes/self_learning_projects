using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Mediator
{
    abstract class Soldier:IColleague
    {
        protected King king;
        public Soldier(King king)
        {
            this.king = king;
            king.addColleague(this);
        }

        public abstract void MSGOfTheLand(string message);

        public abstract void PersonalRequest(string request);
    }
}
