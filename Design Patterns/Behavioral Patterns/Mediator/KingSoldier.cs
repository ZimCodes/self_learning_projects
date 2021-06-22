using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Mediator
{
    class KingSoldier : Soldier
    {
        public KingSoldier(King king) : base(king)
        {   
        }

        public override void MSGOfTheLand(string message)
        {
            king.MSGOfTheLand(message,this);
        }

        public override void PersonalRequest(string request)
        {
            king.PersonalRequest(request,this);
        }
        public override string ToString()
        {
            return "The King's Soldier said";
        }
    }
}
