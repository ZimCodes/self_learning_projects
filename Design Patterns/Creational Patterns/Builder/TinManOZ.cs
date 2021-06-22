using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    class TinManOZ : Robot
    {
        RobotEngineer Engineer;
        public override void ConstructArm()
        {
            Engineer.Arms = "Tin Arms";
        }

        public override void ConstructHead()
        {
            Engineer.Head = "Tin Head";
        }

        public override void ConstructLegs()
        {
            Engineer.Legs = "Tin Legs";
        }

        public override void ContructBody()
        {
            Engineer.Body = "Tin Body";
        }
        public RobotEngineer getBuild()
        {
            return this.Engineer;
        }
    }
}
